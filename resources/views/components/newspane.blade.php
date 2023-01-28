<!--Newspane Starts Here-->
<div class="top-story" id="traffic-news">
    <div class="ui stackable relaxed padded grid">
        <div class="row">
            <div class="ui four wide column">
                <h4 class="ui horizontal divider header">
                    <span style="color: #767676;">
                        <h2>Traffic News</h2>
                    </span>
                    <span style="color:#767676">
                        {{ date('F d, Y') }}
                    </span>
                    
                </h4>
            </div>
            <div class="ui twelve wide column" style="background: #767676;">                
                <marquee behavior="scroll" direction="left" style="color:#fff; font-size:25px; margin-top: 10px;">
                    {{ $trafficNews }}
                </marquee>
            </div>
        </div>
    </div>
</div>
<br>
<!--Newspane Ends Here-->
