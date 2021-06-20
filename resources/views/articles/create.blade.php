



<style>@import "https://cdn.jsdelivr.net/npm/bulma@0.9.2/css/bulma.min.css";</style>


<div id='wrapper'>
    <div id='page' class='container'>
        <h1 class='has-text-weight-bold is-size-4'></h1>

        <form method='POST' action="/articles">
            <input type="hidden" name="_token" value="{{ csrf_token() }}" />

            <div class='field'>
                <label class='label' for='title'>Name</label>

                <div class='control'>
                    <input
                        class='input @error('name') is-danger @enderror'
                        type='text'
                        name='title'
                        id='title'
                        value='{{old('name')}}'>

                    @error('name')
                    <p class="help is-danger">{{$errors->first('name')}}</p>
                    @enderror
                </div>
            </div>



            <div class='field'>
                <label class='label' for='excerpt'>Question</label>

                <div class='control'>
                    <textarea
                        class='textarea @error('question') is-danger @enderror'
                        name='excerpt'
                        id='excerpt'
                    >{{old('question')}}</textarea>

                    @error('question')
                    <p class="help is-danger">{{$errors->first('question')}}</p>
                    @enderror
                </div>
            </div>


            <div classs='field is-grouped'>
                <div class="control">
                    <button class='button is-link' type='submit'>Submit</button>
                </div>
            </div>

        </form>
    </div>
</div>


