<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}" />


        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        
        <!-- Styles -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}}
            
        </style>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js" integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
        {{info('This is some useful information.')}}
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            <table class=" table table-bordered table-striped table-hover datatable datatable-menu">
                <thead>
                    <tr>
                        <th>
                            id
                        </th>
                        <th>
                            name
                        </th>
                        <th>
                            language
                        </th>
                        <th>
                            position
                        </th>
                    </tr>
                </thead>
                @foreach($languages as $language)
                    <tbody data-id="{{ $language->id }}" class="sortable">
                        <tr>
                            <td colspan="8" style="background-color:#ddd;">{{ $language->name }}</td>
                        </tr>
                        @foreach($language->menus as $menu)
                            <tr data-id="{{ $menu->id }}" class="menu">
                                <td>
                                    {{ $menu->id ?? '' }}
                                </td>
                                <td>
                                    {{ $menu->name ?? '' }}
                                </td>
                                <td class="language-name">
                                    {{ $menu->language->name ?? '' }}
                                </td>
                                <td>
                                    {{ $menu->position ?? '' }}
                                </td>

                            </tr>
                        @endforeach
                        <tr class="empty-message" @if($language->menus->count()) style="display:none;"@endif>
                            <td colspan="8" class="text-center">
                                There are no menus in this language
                            </td>
                        </tr>
                    </tbody>
                @endforeach
            </table>
        </div>
        
        
        <script>
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            
            function sendReorderMenusRequest($language) {
                //here we put the languages id's in an array
                var items = $language.sortable('toArray', {attribute: 'data-id'});
                
                //here we drop the empty language id:
                var ids = $.grep(items, (item) => item !== "");

                //here we see check how many menus under this language:
                if ($language.find('tr.menu').length) {
                    //if there is any menu rows then hide the empty message:
                    $language.find('.empty-message').hide();
                }
                $language.find('.language-name').text($language.find('tr:first td').text());
                $.ajax({
                    type:"POST",
                    url: "{{ route('menus.reorder') }}",
                    data:{
                        ids: ids,
                        language_id: $language.data('id')
                    },
                    success:function(response){
                        console.log('ids sort of the menus list: ' + response.input.ids);
                        console.log('language id of these menus list: ' + response.input.language_id);


                        /*
                        $language.children('tr.menu').each(function (index, menu) {
                            $(menu).children('.position').text(response.positions[$(menu).data('id')])
                        });
                        */
                    },
                    error: function(XMLHttpRequest, textStatus, errorThrown) { 
                        alert("Status: " + textStatus); alert("Error: " + errorThrown); 
                    } 
                });
                
            }
            
            $(document).ready(function () {               

                // the whole table is called languages here, he use the selector to select the only
                //.. existing table (he used table not .table!):
                var $languages = $('table');
                //donno, he should select the menus here, but .sortable is for the languages <tbody>
                //.. it think for languages he select the whole table, and for menus he select the language
                var $menus = $('.sortable');
                console.log('categs: ' + $languages);
                console.log('menus: ' + $menus);
                

                $languages.sortable({
                    cancel: 'thead',
                    //this will be triggerd only when after the dragging is done (stopped):
                    stop: () => {
                        console.log('languages.sortable is been triggerd by stop:() =>{} || stop: function(){}');
                        //toArray will make the and array of the items, 
                        //.. in this case an array of id's coming from the attribute data-id:
                        var items = $languages.sortable('toArray', {attribute: 'data-id'});

                        // find the element of the array that is not empty:
                                    //(items): the list of categ id's
                                //$.grep(items), function(item){item!==""});
                        var ids = $.grep(items, (item) => item !== "");

                        console.log('items: ' + items)
                        console.log('ids sort of the languages list: ' + ids)

                        
                        $.ajax({
                            url: "{{ route('languages.reorder') }}",
                            type:"POST",
                            data:{
                                ids: ids
                            },
                            error: function(XMLHttpRequest, textStatus, errorThrown) { 
                                alert("Status: " + textStatus); alert("Error: " + errorThrown); 
                                alert("http: " + XMLHttpRequest); 
                                //location.reload();
                            } 
                        });

                        

                    }
                });

                //obviously he sort the menus, by sending the new languages list order to the controller
                $menus.sortable({
                    connectWith: '.sortable', //table body, so it's like the parent for it
                    items: 'tr.menu', //the table rows or items, it has the class menu

                    //this can be written like this:
                    //stop: function(event,ui){ } //بس يحبو الفزلكة
                    //this will be triggerd only when after the dragging is done (stopped):
                    stop: (event, ui) => {
                        //when the event happaend the targeted element will be the tbody (language)
                        console.log('event (language): ' + $(event.target).data('id'));
                        //the ui will be the exact row (menu)
                        console.log('ui: (menu) ' + $(ui.item).data('id'));
                        //this is the new language
                        console.log('ui parent: (language) ' + $(ui.item).parent().data('id'));


                        //event: is an event :)
                        //ui.item: The jQuery object representing the current dragged element.

                        //element.parent(): will give you the upper element,
                        //.. in this case it's the language (one language not the whole body, so it's the tbody):
                        //// if the element dragged to another language this if will be true:
                        sendReorderMenusRequest($(ui.item).parent());

                        //event.target will give you the element that been handled when the event happend
                        //.. so if the event is click then the target is the element you clicked on
                        //// if the element dragged to another language this 'if' will be true:
                        if ($(event.target).data('id') != $(ui.item).parent().data('id')) {
                            if ($(event.target).find('tr.menu').length) {
                                sendReorderMenusRequest($(event.target));
                            } else {
                                $(event.target).find('.empty-message').show();
                            }
                        } 
                    }
                });
                $('table, .sortable').disableSelection();
                
            });
            
        </script>
    </body>
</html>
