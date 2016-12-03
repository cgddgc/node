<li class="dropdown {dede:field.currentstyle/}"><a class="dropdown-toggle" data-toggle="dropdown" href="{dede:field name='typeurl'/}">{dede:field name='typename'/}<small>{dede:field.typenameen/}</small></a>
          <ul class="dropdown-menu dropdown-menu-left">
            {dede:channel type='son' noself='yes'}
            <li><a href="[field:typeurl/]">[field:typename/]</a></li>
            {/dede:channel}
          </ul>
        </li>