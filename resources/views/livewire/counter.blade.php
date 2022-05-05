<div>
    <h2>こんにちは、{{ $name }}さん。</h2>
    <form wire:submit.prevent="$refresh" action="">
        <input type="text" wire:model.defer="name">
        <p>現在の文字数:{{ mb_strlen($name) }}</p>
        <p><input type="submit" value="送信する"></p>
    </form>
    <hr>
    <p>現在のカウンター：{{ $counter }}</p>
    <input type="button" wire:click="incriment" value="+1">
    <input type="button" wire:click="incriment(10)" value="+10">{{--関数に引数渡せる--}}
    <input type="button" wire:click="$set('counter',0)" value="0にリセットする">{{--$set()こいつは特別な関数--}}
</div>
