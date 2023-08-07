<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\EditPostRequest;
use App\Http\Resources\PostCollection;
use App\Http\Resources\PostResorce;
use App\Models\Post;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return new PostCollection(Post::all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id)
    {
        try {
            $post = Post::find($id);

            // Si no se encuentra ningún post correspondiente al ID, generar un mensaje de error
            if (is_null($post)) {
                throw new Exception(__('errors_g.invalid_post_id'));
            }

            return new PostResorce($post);
        } catch (Exception $e) {
            return Response::json([
                're'   => $e->getMessage(),
                'code' => 'error',
            ]);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EditPostRequest $request, $id)
    {
        try {
            $post = Post::find($id);

            // Si no se encuentra ningún post correspondiente al ID, generar un mensaje de error
            if (is_null($post)) {
                throw new Exception(__('errors_g.invalid_post_id'));
            }

            $post->title = $request->title;
            $post->body  = $request->body;
            $post->save();

            return new PostResorce($post);
        } catch (Exception $e) {
            return Response::json([
                're'   => $e->getMessage(),
                'code' => 'error',
            ]);
        }
    }
}
