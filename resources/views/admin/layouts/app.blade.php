<!DOCTYPE html>
<html lang="en">

    @include('admin.components.head')

    <body>
        @include('admin.components.header')
        <div class="wrapper">
            <div class="container">
                <div class="row">
                    <div class="span3">
                        @include('admin.components.sidebar')
                    </div>
                    <div class="span9">
                        @yield('content')
                    </div>
                </div>
            </div>
        </div>
        @include('admin.components.footer')
        @include('admin.components.script')
    </body>

</html>
