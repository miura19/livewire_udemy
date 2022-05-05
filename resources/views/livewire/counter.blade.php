<div>
    <p>現在のカウンター：{{ $counter }}</p>
    <input type="button" wire:click="incriment" value="+1">
    <input type="button" wire:click="incriment(10)" value="+10">{{--関数に引数渡せる--}}
    <input type="button" wire:click="$set('counter',0)" value="0にリセットする">{{--$set()こいつは特別な関数--}}
</div>
