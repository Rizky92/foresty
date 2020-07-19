




















<li class="{{ Request::is('families*') ? 'active' : '' }}">
    <a href="{{ route('families.index') }}"><i class="fa fa-edit"></i><span>Families</span></a>
</li>

<li class="{{ Request::is('gazetteers*') ? 'active' : '' }}">
    <a href="{{ route('gazetteers.index') }}"><i class="fa fa-edit"></i><span>Gazetteers</span></a>
</li>

<li class="{{ Request::is('treetexas*') ? 'active' : '' }}">
    <a href="{{ route('treetexas.index') }}"><i class="fa fa-edit"></i><span>Treetexas</span></a>
</li>



<li class="{{ Request::is('countries*') ? 'active' : '' }}">
    <a href="{{ route('countries.index') }}"><i class="fa fa-edit"></i><span>Countries</span></a>
</li>

<li class="{{ Request::is('majoreAreas*') ? 'active' : '' }}">
    <a href="{{ route('majoreAreas.index') }}"><i class="fa fa-edit"></i><span>Majore Areas</span></a>
</li>

<li class="{{ Request::is('minoreAreas*') ? 'active' : '' }}">
    <a href="{{ route('minoreAreas.index') }}"><i class="fa fa-edit"></i><span>Minore Areas</span></a>
</li>





<li class="{{ Request::is('herbaria*') ? 'active' : '' }}">
    <a href="{{ route('herbaria.index') }}"><i class="fa fa-edit"></i><span>Herbaria</span></a>
</li>

<li class="{{ Request::is('floras*') ? 'active' : '' }}">
    <a href="{{ route('floras.index') }}"><i class="fa fa-edit"></i><span>Floras</span></a>
</li>

