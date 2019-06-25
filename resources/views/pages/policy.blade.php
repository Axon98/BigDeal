@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
            @endif
            <div>
            	<h2>What is Lorem Ipsum?</h2>
				<p>
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ligula dolor, aliquet molestie mollis et, vehicula non magna. Aliquam pharetra pretium iaculis. Sed tempus, risus non egestas scelerisque, urna ante finibus ante, eu lobortis elit nibh vitae lorem. Vestibulum et sodales augue. Ut id sodales velit. Nunc eget tincidunt dolor, ac dapibus arcu. Aliquam pulvinar luctus dolor ornare varius. Phasellus tincidunt, risus vitae sollicitudin consequat, augue est bibendum augue, quis gravida massa erat sed nisl. Quisque tincidunt tempus mauris ac gravida. Duis a mauris egestas, aliquet tellus in, dapibus lacus. Mauris sit amet sapien in dolor semper blandit. Proin placerat ante iaculis dui pretium luctus. Etiam suscipit, diam in hendrerit scelerisque, sapien leo lacinia arcu, eu egestas turpis leo posuere nisl. Nunc ac erat egestas, pellentesque tortor eleifend, tincidunt ex. Nam vel consectetur nisi.

                    Phasellus convallis, nibh ut auctor laoreet, felis mi porttitor nunc, ut scelerisque massa urna sollicitudin orci. Integer euismod libero id orci porta, quis fringilla mi pellentesque. Suspendisse metus purus, maximus id mollis a, efficitur sit amet metus. In mollis augue leo, eget rutrum turpis scelerisque eu. Maecenas vitae sem nisl. Nulla facilisi. Aliquam vitae neque arcu. Sed congue lacinia est. Nullam porta mauris nunc, eget molestie ipsum efficitur eget. Integer justo risus, mattis nec leo eu, molestie sodales enim. Vivamus vel dolor id risus congue ornare eget in mi. Praesent molestie scelerisque ipsum, sed pulvinar ante elementum vel. Aenean at ipsum ornare, aliquet mi id, facilisis ligula. Maecenas posuere nulla quis lectus viverra, nec lacinia magna varius. Donec eros lorem, posuere vitae pharetra a, egestas in dui.

                    Integer molestie lobortis lorem et cursus. Nam porta libero eu commodo pellentesque. Nulla vulputate dolor vel nibh cursus pellentesque. Etiam ornare congue sem sed venenatis. Pellentesque quis tortor sit amet tellus sagittis faucibus. Morbi lacus mauris, feugiat eget tortor non, luctus tristique tellus. Pellentesque sed ex vitae magna vehicula efficitur vitae eu ante. Etiam placerat nisl sed nibh porta iaculis vel vel nisi.

                    Etiam a pretium nulla, vel fringilla dolor. Etiam tellus erat, auctor accumsan urna a, porta sagittis est. Vivamus metus lacus, feugiat eu hendrerit et, aliquet vulputate leo. Fusce vestibulum leo quis aliquet feugiat. Proin eget nunc sapien. Maecenas rutrum dolor sed mauris tempor convallis. Mauris congue egestas odio, eget volutpat felis commodo consectetur. Praesent imperdiet sed augue sed fermentum.

                    Suspendisse eu mi vel velit aliquet eleifend id sit amet libero. Nam posuere tellus eu eros bibendum rutrum. Suspendisse a velit ut sem fermentum consequat sed vel erat. Curabitur ut diam ut elit bibendum vestibulum vel a magna. Sed scelerisque sollicitudin lorem vel dignissim. Maecenas at est condimentum, pellentesque ipsum vehicula, vulputate enim. Nulla imperdiet, massa id pharetra cursus, nunc sapien tristique est, ac gravida risus quam bibendum nibh. Quisque dignissim mauris ac est interdum dictum.

                    Donec est orci, lobortis ac ante sit amet, semper condimentum est. Sed vulputate elit in gravida porttitor. Curabitur consequat tellus in sagittis molestie. Sed risus nibh, placerat sed magna in, pretium consectetur lorem. Integer hendrerit sem fermentum justo interdum dignissim. Nam vestibulum ut eros vel gravida. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer bibendum neque non accumsan pellentesque. Etiam euismod nunc risus, in volutpat urna semper eget. Ut vel eros vel est accumsan ullamcorper. Suspendisse fermentum sapien et vestibulum pharetra. Ut non turpis arcu. Aenean at sagittis magna. Integer id quam sit amet ipsum dignissim laoreet. Fusce vulputate risus urna, a ultricies nunc lobortis quis. Etiam dolor neque, scelerisque et lobortis sit amet, efficitur eu ipsum.

                    Praesent quis libero nibh. Proin interdum tellus eget dolor accumsan, at luctus purus efficitur. Nullam convallis pretium libero sed malesuada. Duis id semper nibh, sollicitudin aliquet erat. Morbi gravida vestibulum dictum. Proin efficitur quam neque, sed sollicitudin lacus tincidunt eu. Donec pretium lorem at nisi iaculis, et congue risus efficitur. Etiam nec condimentum eros, vel euismod ex. Suspendisse malesuada nisl sed sodales luctus. Nulla facilisis ut justo quis egestas. Integer condimentum sollicitudin nulla ac mattis.

                    Vivamus nec tincidunt tortor. Vivamus sit amet magna sit amet odio consequat accumsan id vel odio. Fusce vitae vestibulum magna, ac commodo massa. In rutrum venenatis sapien, vitae iaculis mauris sollicitudin non. Duis tempus porta lacus, a tempus felis rhoncus vel. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Morbi sodales, lorem in consectetur ullamcorper, magna diam vehicula enim, non dictum nibh mi sed nibh.

                    Nullam eleifend cursus mi id euismod. Aenean lectus mi, imperdiet sit amet dolor bibendum, sollicitudin semper nunc. Donec viverra fermentum commodo. Ut facilisis tortor at ullamcorper laoreet. Aliquam scelerisque magna sapien, vitae egestas lorem vehicula vel. Suspendisse potenti. In hac habitasse platea dictumst.

                    Sed sed erat metus. Sed et posuere est. Sed convallis leo vel semper dignissim. Suspendisse ut justo a lectus porttitor porta pulvinar sed metus. Aenean auctor consectetur imperdiet. Vivamus sit amet ex lectus. Maecenas a cursus velit. Duis eleifend sem at enim condimentum, at auctor lorem gravida.
				</p>
            </div>
        </div>
    </div>
</div>

@endsection