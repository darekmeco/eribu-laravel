<?php

namespace App\Transformers\Test;

use League\Fractal\TransformerAbstract;
use App\Entities\Test\Post;

/**
 * Class PostTransformer.
 *
 * @package namespace App\Transformers\Test;
 */
class PostTransformer extends TransformerAbstract
{
    /**
     * Transform the Post entity.
     *
     * @param \App\Entities\Test\Post $model
     *
     * @return array
     */
    public function transform(Post $model)
    {
        return [
            'id'         => (int) $model->id,

            /* place your other model properties here */

            'created_at' => $model->created_at,
            'updated_at' => $model->updated_at
        ];
    }
}
