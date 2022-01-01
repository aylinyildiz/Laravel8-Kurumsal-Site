<div>
    <input wire:model="search" name="search" type="text" class="form-control me-2"
           list="mylist" placeholder="Ara..." style="width: 300px"/>
    @if(!empty($query))
        <datalist id="mylist">
            @foreach($datalist as $rs)
                <option value="{{$rs->title}}">{{$rs->menu->title}}</option>
            @endforeach
        </datalist>
    @endif
</div>

