<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            <!-- Optionally, you can add icons to the links -->
            <li class="active"><a href="{{ url('home') }}" target="_blank"><i class="fa fa-home"></i> <span>{{ trans('adminlte_lang::message.home') }}</span></a></li>
            <li><a href="{!! route('lista_aliados') !!}"><i class="fa fa-hand-rock-o"></i> <span>Aliados</span></a></li>
            <li><a href="{!! route('lista_posts') !!}"><i class="fa fa-file-image-o"></i> <span>Posts</span></a></li>
            <li><a href="{!! route('list_speakers') !!}"><i class="fa fa-bullhorn"></i> <span>Speakers</span></a></li>
            <li><a href="{!! route('list_tags') !!}"><i class="fa fa-tags"></i> <span>Tags</span></a></li>
        </ul><!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>
