<?php

namespace App\Services;
use App\Models\Category;
use Illuminate\Support\Facades\Storage;

class CategoryService extends BaseService
{
    public function __construct(Category $model)
    {
        parent::__construct($model);
    }

    public function create($request)
    {

        $imagePath = '';

        if (request()->hasFile('image')) {
            $imagePath = $this->uploadFile('desired_disk', request()->file('image'));
        }
        request()->merge(['image' => $imagePath ? $imagePath : '']);

        $data= $request;
        $data['image'] = $imagePath;
     return   parent::create($data);
    }


    public function uploadFile($disk, $file)
    {
        $allowedfileExtension = ['jpg', 'png', 'JPEG', 'PNG', 'jpeg','pdf','docx','txt'];
        $extension = $file->getClientOriginalExtension();
        $check = in_array($extension, $allowedfileExtension);
        if (!$check) {
            return "";
        }
        $path = Storage::disk($disk)->put('', $file);
        return "/$disk/$path";
    }
}

