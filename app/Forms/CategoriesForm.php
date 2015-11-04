<?php namespace App\Forms;

use Kris\LaravelFormBuilder\Form;

class CategoriesForm extends Form
{
    public function buildForm()
    {
        $this
            ->add('name', 'text',[
                'label'=> 'Tên danh mục'
            ])
            ->add('url_rewrite', 'text', [
                'label' => 'Rewrite URL'
            ])
            ->add('description', 'textarea', [
                'label' => 'Thông tin mô tả',
                'attr'	=> ['id' => 'summernote', 'class' => 'summernote']
            ])
            ->add('image', 'file', [
                'label' => 'Ảnh đại diện'
            ])
            ->add('save', 'submit', [
                'label' => 'Lưu lại',
                'attr' => ['class' => 'btn btn-primary']
            ])
            ->add('clear', 'reset', [
                'label' => 'Làm lại',
                'attr' => ['class' => 'btn btn-warning']
            ]);
    }
}