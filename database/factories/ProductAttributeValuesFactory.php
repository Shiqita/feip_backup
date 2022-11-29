<?php

namespace Database\Factories;

use App\Enums\ProductAttributeType;
use App\Models\ProductAttribute;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ProductAttributeValues>
 */
class ProductAttributeValuesFactory extends Factory
{
    public function definition()
    {
        return [];
    }

    public function setProduct(int $productId): self
    {
        return $this->state(function () use ($productId) {
            return[
                'product_id' => $productId,
            ];
        });
    }

    public function setAttribute(ProductAttribute $attribute): self
    {
        switch ($attribute->type) {
            case ProductAttributeType::STRING:
                $value = $this->faker->realTextBetween(20, 500);
                break;
            case ProductAttributeType::INTEGER:
                $value = random_int(1, 1000);
                break;
            case ProductAttributeType::BOOLEAN:
                $value = $this->faker->boolean;
                break;
            default:
                $value = '';
                break;
        }

        return $this->state(function () use ($attribute, $value) {
            return[
                'product_attribute_id' => $attribute->id,
                'value' => $value,
            ];
        });

    }
}
