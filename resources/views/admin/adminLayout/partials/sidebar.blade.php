<?php
$currentControllerName = Request::segment(1);
// echo $currentControllerName;
$currentFullRouteName = Route::getFacadeRoot()
    ->current()
    ->uri();
?>
        <div class="col-md-2 sidebar">
            <div class="logo">
                <img src="{{ asset('assets/img/logo.png') }}" alt="">
            </div>
            <div class="nav-bar margin-top-20">
                <ul>
                    <li>
                        <a href="/admin" class="{{ $currentControllerName == 'admin' || '' ? 'activeNav' : '' }}">User</a>
                    </li>
                    
                    <li>
                        <a href="/admin-employee-claim" class="{{ $currentControllerName == 'admin-employee-claim' || '' ? 'activeNav' : '' }}">Employee Claims</a>
                    </li>
                    
                    <li>
                        <a href="/admin-home-claim" class="{{ $currentControllerName == 'admin-home-claim' || '' ? 'activeNav' : '' }}">Home Claims</a>
                    </li>
                    
                    <li>
                        <a href="/admin-off-shop-claim" class="{{ $currentControllerName == 'admin-off-shop-claim' || '' ? 'activeNav' : '' }}">Office/Shop Claims</a>
                    </li>
                </ul>
            </div>
        </div>