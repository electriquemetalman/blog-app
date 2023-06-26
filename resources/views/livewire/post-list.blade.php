<table class="cart-table">
	<thead class="cart-table-head">
		<tr class="table-head-row">
			<th class="product-remove">Action</th>
			<th class="product-image">Image</th>
			<th class="product-name">Titre</th>
			<th class="product-price">Paragraphe 2</th>
		</tr>
	</thead>
	<tbody>
        @if (count($posts) > 0)
            @foreach ($posts as $post)
                <tr class="table-body-row">
                    <td class="product-remove">
                        <i wire:click.prevent="deletePost({{$post->id}})" class="far fa-window-close"></i><br />
                        <i wire:click.prevent="updatePost({{$post->id}})" class="far fa-window-open"></i>
                    </td>
                    <td class="product-image"><img src="app/public/{{$post->image}}" alt=""></td>
                    <td class="product-name">{{$post->title}}</td>
                    <td class="product-price">{{$post->paragraph1}}</td>
                </tr>
            @endforeach
        @else
            <tr class="table-body-row">
                <td class="product-remove">pas d'article</td>
                <td class="product-image">pas d'article</td>
                <td class="product-name">pas d'article</td>
                <td class="product-price">pas d'article</td>
            </tr>
        @endif
	</tbody>
</table>
