<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="{{asset('css/styles.css')}}">
<style>
    .sidebar {
        transition: all 5s linear;
        display: block;
    }
    .hidden{
        display: none;
        opacity: 0;
    }
    .create-dropdown{
        position: absolute;
        right: 0;
        /* top: 0; */
        /* left: 0; */
        /* width: 100%; */ 
        /* z-index: 100; */
    }
    #folder_li {
        margin-top: 12px;
    }
    .dropdown-menu.dropleft {
        position: absolute;
        top: 28px;
        left: -121px;
}
.screencen{
    position: fixed; /* Stay in place */
  z-index: 999; /* Sit on top */
  left: 0;
  top: 30%;
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(255,255,255,0.8); /* Black w/ opacity */
  left: 0; 
  right: 0; 
  margin-left: auto; 
  margin-right: auto;
  width: 27%;
  padding-top:2em;
  padding-bottom:5em;
  border:1px solid black;
  /* padding:10em; */
}

/* on hover highlight dropdown-item */
.dropdown-item:hover {
  background-color: #d6d3d3 !important;
}

.openedf:hover {
    box-shadow: 2px 2px #d6d3d3;
}

</style>
<x-app-layout>
    <div class="container-fluid">
    <span style="font-size:30px;cursor:pointer;" onclick="openNav()">&#9776;</span>
        <div class="row">
            <div class="col-md-3 box" id="forhidden">
                <ul class="nav flex-column" id="sidebar">
                    <div class="d-flex p-2 align-items-center folder-header">
                        <h4 class="navbar-brand">Folders</h4>
                        <!-- create dropdown -->
                        <div class="dropdown dropleft">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
  <path stroke-linecap="round" stroke-linejoin="round" d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
</svg>                            </button>
                            <div class="dropdown-menu dropleft" aria-labelledby="dropdownMenuButton">
                                 <!-- <button class="btn btn-primary text-center" id="createlink" onClick="createFolder()">Create folder</button> -->
                                <li><a class="dropdown-item" href="#" id="createlink" onClick="createFolder()">Create Folder</a></li>
                                <li><a class="dropdown-item" href="#" onclick="createFile()" >Create File</a></li>
                                <li><a class="dropdown-item" href="#" onclick="deleteFile()" >Delete File</a></li>
                            </div>
                        </div>
                        
                       
                      
                            <form class="create-file-folder screencen" action="" method="" name="createfolder" id="createfolder" style="display: none;">
                                <p style="display: flex;justify-content: center;padding-bottom:2em;font-size: 18px">
                                    Create folder
                                </p>
                            @csrf
                            <input type="hidden" name="user_id" id="user_foldername" value="{{ Auth::user()->id }}">
                            <div class="formfolder" style="display: flex;flex-direction:column;align-items:center;">
                                <input class="input-file-folder" type="text" id="foldername" name="foldername" value="" placeholder="Enter Folder Name">
                                <div style="display:flex;justify-content: space-evenly;margin-top:1em";>
                                <button type="button" class="btn btn-danger" style="margin-right: 4px;" onclick="showfolder()">Cancel</button>
                                <button type="submit" id="submit" class="btn btn-success" >Save</button>
                                </div>
                                <!-- <button type="submit" id="submit" style="background-color: transparent;display:none;"><img src="{{ asset('image/add-folder.png') }}" width="30px" alt=""></button> -->
                                <!-- <button type="button" style="background-color: transparent;" onclick="showfolder()"><img src="{{ asset('image/x.png') }}" width="20px" alt=""></button> -->
                            </div>
                        </form>
                        <form  class="screencen" action="" method="" name="createfile" id="createfile" style="display: none;">
                            @csrf
                            <p style="display: flex;justify-content: center;padding-bottom:2em;font-size: 18px">
                                Create file
                            </p>
                            <div class="formfolder" style="display: flex;flex-direction:column;align-items:center;">
                                <input class="input-file-folder" type="text" id="filename" name="filename" value="" placeholder="Enter File Name">
                                <input type="hidden" name="user_id" id="user_filename" value="{{ Auth::user()->id }}">
                                <div style="display:flex;justify-content: space-evenly;margin-top:1em";>
                                <button type="button" class="btn btn-danger" style="margin-right: 4px;" onclick="showfolder()">Cancel</button>
                                <button type="submit" id="filesubmit" class="btn btn-success" >Save</button>
                                </div>
                                <!-- <button type="submit" id="filesubmit" style="background-color: transparent;display:none;"><img src="{{ asset('image/add-folder.png') }}" width="30px" alt=""></button> -->
                                <!-- <button type="button" onclick="showfolder()" style="background-color: transparent;"><img src="{{ asset('image/x.png') }}" width="20px" alt=""></button> -->
                            </div>
                        </form>
                      
                        
                    </div>

                    @foreach($data as $item)
                    <li class="nav-item" id="folder_li">
                        <a class="nav-link ml-1" aria-current="page" style="display:flex;justify-content:space-between;align-items: center;" onclick="myFunction('{{$item->id}}')">
                            <div style="display: flex;"><img id="arrow-identify-{{$item->id}}-close" src="{{asset('image/right-arrow.png')}}" style="width: 10px!important; height: 10px !important; margin-top:10px!important; margin-right:5px!important;"><img id="arrow-identify-{{$item->id}}-open" src="{{asset('image/up-arrow.png')}}" style="width: 10px!important; height: 10px !important; margin-top:10px!important; margin-right:5px!important; display:none;" ><img class="mr-5" src="{{ asset('image/folder.png') }}" width="30px" alt=""><span class="ml-2 folName">{{ $item->name }}</span></div><svg xmlns="http://www.w3.org/2000/svg" onclick="deleteFolder({{$item->id}},'{{$item->name}}')" style="width:15px" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                            </svg>
                        </a>
                    <li class="file_li" id="{{$item->id}}" style="display: none;">
                        <!-- <div class="ml-5" style="display:flex; margin-left:1em;align-items: center;" onclick="createFile({{$item->id}})"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>Create new file</div> -->
                        @foreach($innerdata as $inneritem)
                        @if($inneritem->parent_folder == $item->id)
                        <a class="ml-5" onclick="createTab({{$inneritem}})" style="display:flex;justify-content: space-between;align-items: center;border-left: 3px solid #c4c7c7;">
                            <div style="display: flex;align-items: center;"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" />
                                </svg>{{ $inneritem->name }}</div><svg xmlns="http://www.w3.org/2000/svg" onclick="deleteFile({{$inneritem->id}},{{$inneritem->name}})" style="width:8px" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <!-- <path stroke-linecap="round" stroke-linejoin="round" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" /> -->
                            </svg>
                        </a>
                        @endif
                        @endforeach
                    </li>
                    </li>
                    @endforeach
                </ul>
            </div>
            <div class="col-md-9" id="forToggle">

                <div class="row editior">
                    <div class="col-md-12">

                        {{-- <div class="header">Add your code here</div> --}}
                        <div class="">
                            <ul class="nav nav-tabs allopenfiles" id="openfiles">
                            </ul>
                        </div>
                        <div class="control-panel editorHead" style="display: flex; justify-content:space-between;align-items: center;">
                            <!-- <div class="button-container"> -->
                            <form action="" method="" id="savecontent" name="savecontent">
                                @csrf
                                <input type="hidden" name="savedid" value="" id="saveidform">
                                <button type="submit" id="savecontentbutton" style="background-color: #337ab7" class="btn text-dark">Save</button>
                            </form>
                            <div style="display: flex;">
                                Language:
                                &nbsp; &nbsp;
                                <select name="" id="languages" class="languages" onchange="changeLanguage()">
                                    <option value="1">No Language</option>
                                    <option value="c">C</option>
                                    <option value="cpp">C++</option>
                                    <option value="php">PHP</option>
                                    <option value="python">PYTHON</option>
                                    <option value="node">JavaScript</option>
                                    <option value="sql">Sql</option>
                                    <option value="html">Html</option>
                                    <option value="css">Css</option>
                                </select>
                            </div>
                        </div>
                        <div class="editor" id="editor"></div>
                    </div>
                    <div class="commentsshow">
                        <div class="header">Comments</div>
                        <!-- view single comment -->
                        <div class="comment-container"></div>
                        <div class="comments">
                            <form action="" method="" id="savecomment" name="savecomment" style="display: flex; align-items:center;flex-direction:row-reverse">
                                <textarea name="comment" placeholder="Add your comments here........" id="comment" cols="170" rows="2" style="margin-top: 10px; margin-bottom:10px;"></textarea>
                                <input type="hidden" name="savedid1" value="" id="saveidform1">
                                <button type="submit" id="savecommentbutton" class="btn btn-primary text-dark">Add Comment</button>
                                <button type="button" id="cancelEdit" class="btn btn-danger text-dark mr-2">Cancel</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="{{ asset('lib/ace.js') }}"></script>
    <script src="{{ asset('lib/theme-monokai.js') }}"></script>
    <script src="{{ asset('js/editorscript.js') }}"></script>
    <script src="{{ asset('js/newsavecode.js') }}"></script>

<script>

    // function openNav(){
    //     if(document.getElementById("forhidden").classList == "col-md-3"){
    //         document.getElementById("forhidden").style.opacity=0;
    //         document.getElementById("sidebar").style.display = "none";
    //         document.getElementById("forhidden").style.width = "20px";
    //         document.getElementById("forhidden").classList.remove("col-md-3");
    //         document.getElementById("forToggle").classList.add("col-md-12");
    //         document.getElementById("forToggle").classList.remove("col-md-9");
    //     }
    //     else{
            
    //         document.getElementById("sidebar").style.display = "block";
    //         document.getElementById("forhidden").style.width = "";
    //         document.getElementById("forhidden").classList.add("col-md-3");
    //         document.getElementById("forToggle").classList.add("col-md-9");
    //         document.getElementById("forToggle").classList.remove("col-md-12");
    //         document.getElementById("forhidden").style.opacity=1;
    //     }

    function openNav(){
        let box = document.getElementById("forhidden");
        box.classList.toggle("hidden");
        if(!box.classList.contains("hidden")){
            document.getElementById("forToggle").classList.add("col-md-9");
            document.getElementById("forToggle").classList.remove("col-md-12");
        }
        else{
            document.getElementById("forToggle").classList.add("col-md-12");
            document.getElementById("forToggle").classList.remove("col-md-9");
        }
    }

        // document.getElementById("forhidden").classList.remove("col-md-3");
        // document.getElementById("forhidden").classList.add("col-md-1");
        // document.getElementById("forToggle").classList.remove("col-md-9")
        // document.getElementById("forToggle").classList.add("col-md-11")
    // }


</script>

</x-app-layout>