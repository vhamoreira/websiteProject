@if ($errors->any())
    @foreach ($errors->all() as $error)
        <li></li>
        <div class="alert alert-danger">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close" onclick="this.parentElements.style.display='none'">
                <i class="material-icons">close</i>
            </button>
            <span>
                      <b> Error - </b> {{ $error }}</span>
        </div>
        @endforeach
        </ul>
        </div>
        @endif

        @if(session('successMsg'))
            <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close" onclick="this.parentElements.style.display='none'">
                    <i class="material-icons">close</i>
                </button>
                <span>
                      <b> Success - </b> {{  session('successMsg') }}</span>
            </div>

        @endif
