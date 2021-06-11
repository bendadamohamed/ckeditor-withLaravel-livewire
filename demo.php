<--view blade -->
  <div wire:ignore class="flex flex-col p-4 bg-white ">
                <label for="">Description </label>
                <textarea id="content"  class="border border-gray-200 rounded" wire:model="content"
                    cols="30" rows="5"></textarea>
                <div class="italic font-light text-red-500"> @error('content') *<span
                            class="error">{{ $message }}</span>
                    @enderror
                </div>
</div>
<--javascript -->
      <script>

    <script src="https://cdn.ckeditor.com/ckeditor5/28.0.0/classic/ckeditor.js"></script>

  ClassicEditor
            .create( document.querySelector( '#content' ) )
            .then(editor => {
                    editor.model.document.on('change:data', () => {
                    @this.set('content', editor.getData()); // here we save data before change happend
                    })
                })
            .catch( error => {
            console.error( error );
            } );
      </script>
