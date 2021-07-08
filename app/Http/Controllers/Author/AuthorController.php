<?php

namespace App\Http\Controllers\Author;

use App\Http\Controllers\Controller;
use App\Models\Author;
use App\Traits\ApiResponser;
use Illuminate\Http\Response;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    // Standar responses
    use ApiResponser;

    public function __construct()
    {
        //
    }

    /**
     * Return a Author's list
     * @return Illuminate\Http\Response
     */
    public function authorsList()
    {
        $authors = Author::all();
        return $this->successResponse($authors);
    }

    /**
     * Create an instance of Author
     * @return Illuminate\Http\Response
     */
    public function storeAuthor(Request $request){
        $rules =[
            'name'=> 'required|max:255',
            'gender'=> 'required|max:255|in:male,famle',
            'country'=> 'required|max:255',
        ];

        $this->validate($request, $rules);
        $author = Author::create($request->all());
        return $this->successResponse($author,Response::HTTP_CREATED);
    }


    /**
     * Return an specific Author
     * @return Illuminate\Http\Response
     */
    public function getAuthor($author){
        $author = Author::findOrFail($author);
        return $this->successResponse($author);
    }

    /**
     * Update an especific author data
     * @return Illuminate\Http\Response
     */
    public function updateAuthor(Request $request, $author){
        
    }

    /**
     * Delete an specific author data
     * @return Illuminate\Http\Response
     */
    public function deleteAutor($author){
        
    }
   
}
