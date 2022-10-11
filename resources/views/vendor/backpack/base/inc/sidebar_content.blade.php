{{-- This file is used to store sidebar items, inside the Backpack admin panel --}}
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('dashboard') }}"><i class="la la-home nav-icon"></i> {{ trans('backpack::base.dashboard') }}</a></li>

<li class="nav-item"><a class="nav-link" href="{{ backpack_url('brand') }}"><i class="nav-icon la la-medium"></i> Марки</a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('car-model') }}"><i class="nav-icon la la-medium"></i> Модели</a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('car') }}"><i class="nav-icon la la-automobile"></i> Автомобили</a></li>