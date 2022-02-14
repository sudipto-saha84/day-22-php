<?php


namespace App\classes;


class Products
{
    protected $allProducts;
    protected $result = [];
    public function index()
    {
        return [
            0 => [
                'id' => 1,
                'category_id' => 1,
                'name' => 'Black-T-Shirt',
                'price' => 700,
                'description' => 'Product Description',
                'img' => 'assests/img/1.jpg',
            ],
            1 => [
                'id' => 2,
                'category_id' => 1,
                'name' => 'White-T-shirt',
                'price' => 900,
                'description' => 'Product Description',
                'img' => 'assests/img/2.jpg',
            ],
            2 => [
                'id' => 3,
                'category_id' => 2,
                'name' => 'Red-Sharee',
                'price' => 5600,
                'description' => 'Product Description',
                'img' => 'assests/img/3.jpg',
            ],
            3 => [
                'id' => 4,
                'category_id' => 2,
                'name' => 'Off White-Sharee',
                'price' => 5600,
                'description' => 'Product Description',
                'img' => 'assests/img/s1.jpg',
            ],
            4 => [
                'id' => 5,
                'category_id' => 3,
                'name' => 'Kids shirt',
                'price' => 500,
                'description' => 'Product Description',
                'img' => 'assests/img/4.jpg',
            ],
            5 => [
                'id' => 6,
                'category_id' => 3,
                'name' => 'Three piece',
                'price' => 5600,
                'description' => 'Product Description',
                'img' => 'assests/img/t1.jpg',
            ],
        ];
    }

    public function shortProducts($categoryId)
    {
        $this->allProducts = $this->index();
        foreach ($this->allProducts as $product)
        {
            if ($product['category_id'] ==$categoryId)
            {
                array_push($this->result,$product);
            }
        }
        return $this->result;
    }
    public function getProductDetails($productId)
    {
        $this->allProducts = $this->index();
        foreach ($this->allProducts as $product)
        {
            if ($product['id'] ==$productId)
            {
                return$product;
            }
        }
    }


}