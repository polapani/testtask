@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">

                    <button class="mdc-fab mdc-fab--extended" onclick="window.location.href='/post/add'">
                        <div class="mdc-fab__ripple"></div>
                        <span class="material-icons mdc-fab__icon">add</span>
                        <span class="mdc-fab__label">Create post</span>
                    </button>

                </div>

                <div class="card-body">
                    <div class="post-list">
                    @foreach($posts as $post)
                            <div class="mdc-card demo-card">
                                <div class="mdc-card__primary-action demo-card__primary-action mdc-ripple-upgraded "
                                     tabindex="0"
                                     style="--mdc-ripple-fg-size:210px; --mdc-ripple-fg-scale:1.83226; --mdc-ripple-fg-translate-start:52.5078px, -63.293px; --mdc-ripple-fg-translate-end:70px, -38px; padding:10px;">
                                    <div class="demo-card__primary">
                                        <div
                                            class="demo-card__secondary mdc-typography mdc-typography--body2">{{$post->content}}
                                        </div>
                                        <h3 class="demo-card__subtitle mdc-typography mdc-typography--subtitle2">
                                            by {{$post->user->name}}
                                            Wagner</h3></div>

                                </div>
                                <div class="mdc-card__actions">
                                    <div class="mdc-card__action-buttons">
                                        @if($post->user_id === \Auth::user()->id)
                                            <button onclick="window.location.href='/post/edit/{{$post->id}}'" class="mdc-button mdc-card__action mdc-card__action--button"><span
                                                class="mdc-button__ripple"></span> Edit
                                            </button>
                                        @endif
                                        <button class="mdc-button mdc-card__action mdc-card__action--button"><span
                                                class="mdc-button__ripple"></span> Bookmark
                                        </button>
                                    </div>
                                    <div class="mdc-card__action-icons">
                                        <button
                                            class="mdc-icon-button mdc-card__action mdc-card__action--icon--unbounded"
                                            aria-pressed="false" aria-label="Add to favorites" title="Add to favorites">
                                            <i class="material-icons mdc-icon-button__icon mdc-icon-button__icon--on">favorite</i>
                                            <i class="material-icons mdc-icon-button__icon">favorite_border</i>
                                        </button>
                                        <button
                                            class="mdc-icon-button material-icons mdc-card__action mdc-card__action--icon--unbounded"
                                            title="Share" data-mdc-ripple-is-unbounded="true">share
                                        </button>
                                        <button
                                            class="mdc-icon-button material-icons mdc-card__action mdc-card__action--icon--unbounded"
                                            title="More options" data-mdc-ripple-is-unbounded="true">more_vert
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <HR>

                    @endforeach
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
