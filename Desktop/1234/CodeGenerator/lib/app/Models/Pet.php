<?php
/**
 * Pet
 */
namespace app\Models;

/**
 * Pet
 */
class Pet {

    /** @var int $id 宠物ID编号*/
    private $id;

    /** @var \app\Models\Category $category */
    private $category;

    /** @var string $name 名称*/
    private $name;

    /** @var string[] $photoUrls 照片URL*/
    private $photoUrls;

    /** @var \app\Models\Tag[] $tags 标签*/
    private $tags;

    /** @var string $status 宠物销售状态*/
    private $status;

}
