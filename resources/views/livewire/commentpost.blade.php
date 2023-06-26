    <div>    
        <div class="comments-list-wrap">
	        <h3 class="comment-count-title">{{ $comment_nomber }} Comments</h3>
							<div class="comment-list">
                                @foreach ($comments as $comment)
                                    <div class="single-comment-body">
                                        <div class="comment-user-avater">
                                            <img src="/assets/img/avaters/user.jpg" alt="">
                                        </div>
                                        <div class="comment-text-body">
                                            <h4>{{ $comment->nom }}<span class="comment-date">{{ $comment->created_at->format('M') }} {{ date("d, Y", strtotime($comment->created_at)) }}</span> <a data-bs-toggle="modal" data-bs-target="#staticBackdrop">repondre</a> <span><a wire:click="editComment({{$comment->id}})" data-bs-toggle="modal" data-bs-target="#staticBackdropm">modifier</a></span> <span><a href="#">suprimer</a></span></h4>
                                            <p>{{ $comment->comment }}</p>
                                        </div>
                                        <!-- update Modal -->
                                        <div class="modal fade" wire:ignore.self id="staticBackdropm" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="staticBackdropLabel">Modifier votre commentaire</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <form>
                                                        <p>
                                                            <input class="form-control @error('email') is-invalid @enderror" type="email" id="email" placeholder="votre Email" wire:model="email">
                                                            @error('email')
                                                                <span class="text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </p>
                                                        <p>
                                                            <textarea class="form-control @error('comment') is-invalid @enderror" valeu="{{ $comment->comment }}" id="comment" cols="30" rows="10" placeholder="votre commentaire" wire:model="comment"></textarea>
                                                            @error('comment')
                                                                <span class="text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </p>
                                                        <p><input type="submit" value="Commenter" wire:click.prevent="updateComment()"></p>
                                                    </form>
                                                    <div class="col-md-8 mb-2">
                                                        @if(session()->has('success'))
                                                            <div class="alert alert-success" role="alert">
                                                                {{ session()->get('success') }}
                                                            </div>
                                                        @endif
                                                            @if(session()->has('error'))
                                                                <div class="alert alert-danger" role="alert">
                                                                    {{ session()->get('error') }}
                                                                </div>
                                                            @endif
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end update Modal -->
                                        <!--<div class="single-comment-body child">
                                            <div class="comment-user-avater">
                                                <img src="/assets/img/avaters/user.jpg" alt="">
                                            </div>
                                            <div class="comment-text-body">
                                                <h4>Simon Soe <span class="comment-date">Aprl 27, 2020</span> <a href="#">reply</a></h4>
                                                <p>Nunc risus ex, tempus quis purus ac, tempor consequat ex. Vivamus sem magna, maximus at est id, maximus aliquet nunc. Suspendisse lacinia velit a eros porttitor, in interdum ante faucibus.</p>
                                            </div>
                                        </div>-->
                                    </div>
                                @endforeach
							</div>
                            <!-- replay Modal -->
                            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        ...
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary">Understood</button>
                                    </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end replay Modal -->
        </div>
        <div class="comment-template">
            <h4>Laisser un commentaire</h4>
                <p>Si vous aver un commentaire surtou n'hesiter pas a nous faire par de votre opignon.</p>
            <form>
                <p>
                    <input  class="@error('name') is-invalid @enderror" type="text" id="name" placeholder="votre nom" wire:model="name">
                    @error('name')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                    <input class="@error('email') is-invalid @enderror" type="email" id="email" placeholder="votre Email" wire:model="email">
                    @error('email')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </p>
                <p>
                    <textarea class="form-control @error('comment') is-invalid @enderror" id="comment" cols="30" rows="10" placeholder="votre commentaire" wire:model="comment"></textarea>
                    @error('comment')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </p>
                <p><input type="submit" value="Commenter" wire:click.prevent="storeComment()"><input type="submit" value="Annuler" wire:click.prevent="resetFields()"></p>
            </form>
            <div class="col-md-8 mb-2">
                @if(session()->has('success'))
                    <div class="alert alert-success" role="alert">
                        {{ session()->get('success') }}
                    </div>
                @endif
                    @if(session()->has('error'))
                        <div class="alert alert-danger" role="alert">
                            {{ session()->get('error') }}
                        </div>
                    @endif
            </div>
        </div>
    </div>    
