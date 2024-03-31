@if(session()->has('success'))
    <div>
        <p x-data="{show:true}"
           x-init="setTimeout(() => show = false , 4000)"
           x-show="show"
         style="
            position: fixed;
    bottom: 0;
    right: 0;
    background-color: brown;
    color: #ffffff;
    padding: 0.7rem 1rem;
    border-radius: 0.75rem;
    font-size: 0.9rem;

    "
        >{{session('success')}}
        </p>
    </div>
@endif
