<?php

namespace App\Http\Controllers;

use App\CatBreed;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Service\CatApiService;
use GuzzleHttp\Exception\GuzzleException;

class BreedController extends Controller
{
    /**
     * The Cat API service
     *
     * @var CatApiService
     */
    protected $catApi;

    /**
     * Create a new controller instance
     *
     * @param CatApiService $catApi
     */
    public function __construct(CatApiService $catApi)
    {
        $this->catApi = $catApi;
    }

    /**
     * Search by name and list the found cat breeds
     *
     * @param Request $request
     * @return Response
     */
    public function list(Request $request)
    {
        $name = $request->input('name');

        try {
            $breeds = CatBreed::where('name', 'like', '%' . $name . '%')->get();
            if ($breeds->isEmpty()) {
                return $this->searchApi($name);
            }
        } catch (GuzzleException $e) {
            $breeds = CatBreed::where('name', 'like', '%' . $name . '%')->get();
            if ($breeds->isEmpty()) {
                return response()->json([
                    'message'   => 'It was not possible to perform your search.',
                ], 500);
            }
        } catch (QueryException $e) {
            return $breeds = $this->searchApi($name, true);
        }
        return response()->json($breeds);
    }

    /**
     * Search for cat breeds in the Cat API using the service
     *
     * @param string $name
     * @param bool $abort
     * @return Response
     */
    protected function searchApi(string $name, bool $abort = false)
    {
        try {
            $breedsFromApi = $this->catApi->searchByName($name);

            $breeds = [];
            foreach ($breedsFromApi as $breed) {
                $breeds[] = CatBreed::create($breed);
            }
        } catch (GuzzleException $e) {
            if ($abort) {
                return response()->json([
                    'message'   => 'It was not possible to perform your search.',
                ], 500);
            }
            throw $e;
        }

        return response()->json($breeds);
    }
}
