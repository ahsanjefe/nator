<li class="nav-item">
    <a href="{{ route('s10UserDatabases.index') }}"
       class="nav-link {{ Request::is('s10UserDatabases*') ? 'active' : '' }}">
        <p>S 10 User Databases</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('s20UserTables.index') }}"
       class="nav-link {{ Request::is('s20UserTables*') ? 'active' : '' }}">
        <p>S 20 User Tables</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('s30DataTypes.index') }}"
       class="nav-link {{ Request::is('s30DataTypes*') ? 'active' : '' }}">
        <p>S 30 Data Types</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('s40TableTypes.index') }}"
       class="nav-link {{ Request::is('s40TableTypes*') ? 'active' : '' }}">
        <p>S 40 Table Types</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('s50Subtypes.index') }}"
       class="nav-link {{ Request::is('s50Subtypes*') ? 'active' : '' }}">
        <p>S 50 Subtypes</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('s60ColumnTypes.index') }}"
       class="nav-link {{ Request::is('s60ColumnTypes*') ? 'active' : '' }}">
        <p>S 60 Column Types</p>
    </a>
</li>


