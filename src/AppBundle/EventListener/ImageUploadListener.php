<?php
/**
 * Created by PhpStorm.
 * User: jonas
 * Date: 08/05/18
 * Time: 22:43
 */

namespace AppBundle\EventListener;


use AppBundle\Entity\Recipe;
use AppBundle\ImageUpload;
use Doctrine\ORM\Event\LifecycleEventArgs;
use Doctrine\ORM\Event\PreUpdateEventArgs;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class ImageUploadListener
{

    private $uploader;

    /**
     * ImageUploadListener constructor.
     * @param $uploader
     */
    public function __construct(ImageUpload $uploader)
    {
        $this->uploader = $uploader;
    }

    public function prePersist(LifecycleEventArgs $args){

        $entity=$args->getEntity();
        $this->uploadFile($entity);

    }
    public function preUpdate(PreUpdateEventArgs $args){

        $entity=$args->getEntity();
        $this->uploadFile($entity);

    }

    private function uploadFile($entity){
        //upload only works for Product entities
        if (!$entity instanceof Recipe){
            return;
        }
        $file = $entity->getImage();

        //only upload new files
        if (!$file instanceof UploadedFile){
            return;
        }
        $fileName=$this->uploader->upload($file);
        $entity->setImage($fileName);
    }




}