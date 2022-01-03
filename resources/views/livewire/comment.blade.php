<div>
    {{-- mesajları görüp yazmak için eklenilen fonksiyon--}}
    @if (session()->has('message'))
        <div class="alert alert-success">
            {{session('message')}}
        </div>
    @endif

    <form wire:submit.prevent="store">
        @csrf
        <div class="row">
            <div class="col form-group">
                <textarea wire:model="comment" class="form-control" placeholder="Your Comment"></textarea>
                @error('comment') <span class="text-danger">{{$message}}</span>@enderror
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 form-group">
                @error('rate') <span class="text-danger">{{$message}}</span>@enderror
                <strong class="text-uppercase">Your Rating: </strong>

                <div class="rating">
                    <input type="radio" wire:model="rate" value="5" id="5">
                    <label for="5">☆</label> <input type="radio" wire:model="rate" value="4" id="4">
                    <label for="4">☆</label> <input type="radio" wire:model="rate" value="3" id="3">
                    <label for="3">☆</label> <input type="radio" wire:model="rate" value="2" id="2">
                    <label for="2">☆</label>
                    <input type="radio" wire:model="rate" value="1" id="1"><label for="1">☆</label>
                </div>
            </div>
        </div>

        @auth
            <input type="submit" class="btn btn-primary" value="Save"/>
        @else
            <a href="/login" class="btn-primary">For submit your commit. Please login</a>
        @endauth
    </form>
</div>

