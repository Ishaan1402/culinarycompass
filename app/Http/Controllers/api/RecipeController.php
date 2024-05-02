<?php

namespace App\Http\Controllers\api;

use App\Models\Recipe;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Routing\Controller as Controller;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class RecipeController extends Controller
{

    public function createRecipe(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'cooking_duration' => 'required|numeric',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);


        $recipe = new Recipe;
        $recipe->name = $request->name;
        $recipe->description = $request->description;
        $recipe->cooking_duration = $request->cooking_duration;

        $image = $request->file('image');
        $imagePath = $image->store('images', 'public');
        $recipe->cover_image = $imagePath;
        $recipe->save();

        return response()->json(['success' => true, 'recipe_id'=>$recipe->id]);
    }


    public function updateRecipe(Request $request){

        $request->validate([
            'ingredients' => 'string',
            'steps' => 'string',
            'image.*' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'recipe_id' => 'required|integer',
        ]);

        $ingredients = json_decode($request->input('ingredients'), true);
        $steps = json_decode($request->input('steps'), true);

        foreach ($request->file('image') as $key => $image) {
            $path = $image->store('images');
        }



        return response()->json(['success' => true]);
    }
}
