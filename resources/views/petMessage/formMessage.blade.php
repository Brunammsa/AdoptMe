<x-app-layout>
    <div class="container-message">
        <p class="p-message">Envie uma mensagem para a pessoa ou instituição que está cuidando do animal:</p>
        <section class="section-message">
            <form action="{{route('meusPets.contactForm')}}" class="contact-form" method="POST">
                @csrf
                <div class="box-message">
                    <label for="mensagem" class="label-mensagem">Mensagem</label>
                    <textarea type="text" autofocus placeholder="Escreva sua mensagem" class="text-area border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm"></textarea>
                </div>
                <div class="buttons-message">
                    <button class="button-enviar-msg" type="submit" style="background-color: rgb(252, 112, 113)">Enviar</button>
                </div>
            </form>
        </section>
    </div>
</x-app-layout>