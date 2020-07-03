<?php
    \Illuminate\Support\Facades\Session::flush();
?>
@extends('discoverPages.targetPublic')
@extends('discoverPages.tags')
@extends('discoverPages.gender')
@extends('discoverPages.otherTags')
@extends('master/layout')
@section('content')

    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel" style='color: black !important;'>Oops</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div id="error" class="modal-body text-center" style='color: black !important;'></div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tudo bem!</button>
                </div>
            </div>
        </div>
    </div>

@endsection
