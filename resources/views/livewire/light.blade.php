<div>
    {{-- Stop trying to control. --}}
    <h1>Light Component</h1>
    &#128161; {{$brightness}}
    <div class="progress" style="height: 20px">
        <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: {{$brightness}}%" aria-valuenow="{{$brightness}}" aria-valuemin="0" aria-valuemax="100"></div>
    </div>
    <div>
        <button class="btn btn-danger mt-3 btn-lg" wire:click="off">Off</button>
        <button class="btn btn-info mt-3 btn-lg" wire:click="decrement2" @if($brightness<10)disabled @endif>-</button>
        <button class="btn btn-info mt-3 btn-lg" wire:click="increment2" @if($brightness>90)disabled @endif >+</button>
        <button class="btn btn-primary mt-3 btn-lg" wire:click="on">On</button>
    </div>
</div>
