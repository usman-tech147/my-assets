@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header clearfix">
                        {{ __('Dashboard') }}
                        <button class="btn btn-primary btn-sm float-right"
                                onclick="Export2Doc('exportContent', 'test');">
                            Export Word
                        </button>
                    </div>
                    <div class="card-body">
                        {{--                    <table class="table">--}}
                        {{--                        <thead style="background-color: black; color: white">--}}
                        {{--                        <tr>--}}
                        {{--                            <th scope="col">#</th>--}}
                        {{--                            <th scope="col">First</th>--}}
                        {{--                            <th scope="col">Last</th>--}}
                        {{--                            <th scope="col">Handle</th>--}}
                        {{--                        </tr>--}}
                        {{--                        </thead>--}}
                        {{--                        <tbody>--}}
                        {{--                        <tr>--}}
                        {{--                            <th scope="row">1</th>--}}
                        {{--                            <td>Mark</td>--}}
                        {{--                            <td>Otto</td>--}}
                        {{--                            <td>@mdo</td>--}}
                        {{--                        </tr>--}}
                        {{--                        <tr>--}}
                        {{--                            <th scope="row">2</th>--}}
                        {{--                            <td>Jacob</td>--}}
                        {{--                            <td>Thornton</td>--}}
                        {{--                            <td>@fat</td>--}}
                        {{--                        </tr>--}}
                        {{--                        <tr>--}}
                        {{--                            <th scope="row">3</th>--}}
                        {{--                            <td>Larry</td>--}}
                        {{--                            <td>the Bird</td>--}}
                        {{--                            <td>@twitter</td>--}}
                        {{--                        </tr>--}}
                        {{--                        </tbody>--}}
                        {{--                    </table>--}}

                        {{--                    <div id="exportContent">--}}
                        {{--                        <!-- Your content to export here -->--}}
                        {{--                        <h3 style="color: red">What is Lorem Ipsum?</h3>--}}
                        {{--                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.--}}
                        {{--                    </div>--}}

                        <div id="exportContent">
                            <table>
                                <thead>
                                <tr>
                                    <th style="border: 1px solid black;">Emil</th>
                                    <th style="border: 1px solid black;">Tobias</th>
                                    <th style="border: 1px solid black;">Linus</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr style="border: 1px solid black;">
                                    <td style="border: 1px solid black;">Emil</td>
                                    <td style="border: 1px solid black;">Tobias</td>
                                    <td style="border: 1px solid black;">Linus</td>
                                </tr>
                                <tr style="border: 1px solid black;">
                                    <td style="border: 1px solid black;">16</td>
                                    <td style="border: 1px solid black;">14</td>
                                    <td style="border: 1px solid black;">10</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        function Export2Doc(element, filename = '') {
            var preHtml = "<html xmlns:o='urn:schemas-microsoft-com:office:office' xmlns:w='urn:schemas-microsoft-com:office:word' xmlns='http://www.w3.org/TR/REC-html40'><head><meta charset='utf-8'><title>Export HTML To Doc</title></head><body>";
            var postHtml = "</body></html>";
            var html = preHtml + document.getElementById(element).innerHTML + postHtml;

            var blob = new Blob(['\ufeff', html], {
                type: 'application/msword'
            });

            var url = 'data:application/vnd.ms-word;charset=utf-8,' + encodeURIComponent(html)

            filename = filename ? filename + '.doc' : 'document.doc';

            var downloadLink = document.createElement("a");

            document.body.appendChild(downloadLink);

            if (navigator.msSaveOrOpenBlob) {
                navigator.msSaveOrOpenBlob(blob, filename);
            } else {
                downloadLink.href = url;

                downloadLink.download = filename;

                downloadLink.click();
            }

            document.body.removeChild(downloadLink);


        }

    </script>
@endsection
