<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\CarRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class CarCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class CarCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;

    /**
     * Configure the CrudPanel object. Apply settings to all operations.
     *
     * @return void
     */
    public function setup()
    {
        CRUD::setModel(\App\Models\Car::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/car');
        CRUD::setEntityNameStrings('Автомобиль', 'Автомобили');
    }

    /**
     * Define what happens when the List operation is loaded.
     *
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        CRUD::column('image')->label('Фото')->type('image')->disk('public');
        CRUD::column('carModel.brand.name')->label('Марка');
        CRUD::column('carModel.name')->label('Модель');
        CRUD::column('year_issue')->label('Год выпуска');
        CRUD::column('car_number')->label('Госномер');
        CRUD::column('color')->label('Цвет');
        CRUD::column('kp')->label('Коробка передач');
        CRUD::column('daily_coast')->label('Цена аренды в сутки');
    }

    /**
     * Define what happens when the Create operation is loaded.
     *
     * @see https://backpackforlaravel.com/docs/crud-operation-create
     * @return void
     */
    protected function setupCreateOperation()
    {
        CRUD::setValidation(CarRequest::class);

        CRUD::field('car_model_id')->type('select')->label('Модель')->entity('carModel');
        CRUD::field('image')->label('Фото')->type('upload')->upload(true)->disk('public');
        CRUD::field('year_issue')->label('Год выпуска')->type('text');
        CRUD::field('car_number')->label('Госномер автомобиля');
        CRUD::field('color')->label('Цвет');
        CRUD::field('kp')->label('КП')->type('select_from_array')->options([
            'АВТОМАТ' => 'Автомат',
            'МЕХАНИК' => 'Механик'
        ])->default('АВТОМАТ');
        CRUD::field('daily_coast')->label('Цена аренды в сутки');
    }

    /**
     * Define what happens when the Update operation is loaded.
     *
     * @see https://backpackforlaravel.com/docs/crud-operation-update
     * @return void
     */
    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }
}
