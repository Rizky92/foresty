
<li class="{{ Request::is('carousels*') ? 'active' : '' }}">
    <a href="{{ route('carousels.index') }}"><i class="fa fa-edit"></i><span>Carousels</span></a>
</li>

<li class="{{ Request::is('tumbuhans*') ? 'active' : '' }}">
    <a href="{{ route('tumbuhans.index') }}"><i class="fa fa-edit"></i><span>Tumbuhans</span></a>
</li>


<li class="{{ Request::is('families*') ? 'active' : '' }}">
    <a href="{{ route('families.index') }}"><i class="fa fa-edit"></i><span>Families</span></a>
</li>

<li class="{{ Request::is('gazetteers*') ? 'active' : '' }}">
    <a href="{{ route('gazetteers.index') }}"><i class="fa fa-edit"></i><span>Gazetteers</span></a>
</li>

<li class="{{ Request::is('treetexas*') ? 'active' : '' }}">
    <a href="{{ route('treetexas.index') }}"><i class="fa fa-edit"></i><span>Treetexas</span></a>
</li>

<li class="{{ Request::is('minorAreas*') ? 'active' : '' }}">
    <a href="{{ route('minorAreas.index') }}"><i class="fa fa-edit"></i><span>Minor Areas</span></a>
</li>

<li class="{{ Request::is('countries*') ? 'active' : '' }}">
    <a href="{{ route('countries.index') }}"><i class="fa fa-edit"></i><span>Countries</span></a>
</li>

<li class="{{ Request::is('majorAreas*') ? 'active' : '' }}">
    <a href="{{ route('majorAreas.index') }}"><i class="fa fa-edit"></i><span>Major Areas</span></a>
</li>

<li class="{{ Request::is('herbaria*') ? 'active' : '' }}">
    <a href="{{ route('herbaria.index') }}"><i class="fa fa-edit"></i><span>Herbaria</span></a>
</li>

