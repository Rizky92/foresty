















<li class="{{ Request::is('dashboard/countries*') ? 'active' : '' }}">
    <a href="{{ route('dashboard.countries.index') }}"><i class="fa fa-edit"></i><span>Countries</span></a>
</li>

<li class="{{ Request::is('dashboard/gazetteers*') ? 'active' : '' }}">
    <a href="{{ route('dashboard.gazetteers.index') }}"><i class="fa fa-edit"></i><span>Gazetteers</span></a>
</li>

<li class="{{ Request::is('dashboard/minoreAreas*') ? 'active' : '' }}">
    <a href="{{ route('dashboard.minoreAreas.index') }}"><i class="fa fa-edit"></i><span>Minore Areas</span></a>
</li>

<li class="{{ Request::is('dashboard/majoreAreas*') ? 'active' : '' }}">
    <a href="{{ route('dashboard.majoreAreas.index') }}"><i class="fa fa-edit"></i><span>Majore Areas</span></a>
</li>

<li class="{{ Request::is('dashboard/families*') ? 'active' : '' }}">
    <a href="{{ route('dashboard.families.index') }}"><i class="fa fa-edit"></i><span>Families</span></a>
</li>

<li class="{{ Request::is('dashboard/treetaxas*') ? 'active' : '' }}">
    <a href="{{ route('dashboard.treetaxas.index') }}"><i class="fa fa-edit"></i><span>Treetaxas</span></a>
</li>

<li class="{{ Request::is('dashboard/floras*') ? 'active' : '' }}">
    <a href="{{ route('dashboard.floras.index') }}"><i class="fa fa-edit"></i><span>Floras</span></a>
</li>

<li class="{{ Request::is('dashboard/herbaria*') ? 'active' : '' }}">
    <a href="{{ route('dashboard.herbaria.index') }}"><i class="fa fa-edit"></i><span>Herbaria</span></a>
</li>

<li class="{{ Request::is('dashboard/faunas*') ? 'active' : '' }}">
    <a href="{{ route('dashboard.faunas.index') }}"><i class="fa fa-edit"></i><span>Faunas</span></a>
</li>

<li class="{{ Request::is('dashboard/tempatWisatas*') ? 'active' : '' }}">
    <a href="{{ route('dashboard.tempatWisatas.index') }}"><i class="fa fa-edit"></i><span>Tempat Wisatas</span></a>
</li>

<li class="{{ Request::is('dashboard/beritas*') ? 'active' : '' }}">
    <a href="{{ route('dashboard.beritas.index') }}"><i class="fa fa-edit"></i><span>Beritas</span></a>
</li>

<li class="{{ Request::is('dashboard/posts*') ? 'active' : '' }}">
    <a href="{{ route('dashboard.posts.index') }}"><i class="fa fa-edit"></i><span>Posts</span></a>
</li>

<li class="{{ Request::is('dashboard/images*') ? 'active' : '' }}">
    <a href="{{ route('dashboard.images.index') }}"><i class="fa fa-edit"></i><span>Images</span></a>
</li>

