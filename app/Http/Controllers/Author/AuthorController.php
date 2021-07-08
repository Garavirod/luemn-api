<?php

namespace App\Http\Controllers\Author;

use App\Http\Controllers\Controller;
use App\Models\Author;
use App\Traits\ApiResponser;
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
        
    }


    /**
     * Return an specific Author
     * @return Illuminate\Http\Response
     */
    public function getAuthor(Request $request){
        
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
