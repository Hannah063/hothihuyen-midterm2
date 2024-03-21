<div class="card col-3" style="padding: 0; border: 0; background: #eff2f1">
    <div style="width: 90%">
        <img src="{{ asset('assets/images/' . $file) }}" class="card-img-top" alt="">
        <div class="card-body mt-2" style="padding: 0;">
            <h3 class="card-title"><a href="#">{{ $name }}</a></h3>
            <p style="color:#939494 ">{{ $job }}</p>
            <p class="card-text" style="color:#939494 ">{{ $describe }}</p>
            <a href="#" style="font-weight: bold">Learn More</a>
        </div>
    </div>
</div>
