<style>
    .myclass{
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }
    .screenshot-area{
        width: 60%;
        margin-top:40px;
    }

    .form-area{
        width: 40%;
        padding-right:3em;
        margin-bottom: 30px;
    }
    /* create media query for making the flex col in case of mobile screen */
    @media screen and (max-width: 600px) {
        .myclass {
            flex-direction: column;
            padding-top: 3em ;
        }
        .screenshot-area{
            width: 90%;
        }
        .form-area{
            width: 90%;
            padding-right:0em;
        }
    }


</style>
<div class="min-h-screen myclass pt-6 pr-6 bg-gray-100">
    <div class="screenshot-area">
        {{ $logo }}
    </div>
    <div class="form-area" style="padding-top:2em" >
        <div class="mt-6 ml-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
            {{ $slot }}
        </div>
    </div>
</div>
