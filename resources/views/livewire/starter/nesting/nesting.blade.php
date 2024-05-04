<div>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Title</th>
                <th scope="col">Content</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
                <livewire:starter.nesting.post-row :key="$post->id" :$post/>  <!-- // or :post="$post"  --!>
            @endforeach
    </table>
</div>
