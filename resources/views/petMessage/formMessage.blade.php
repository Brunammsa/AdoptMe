<x-app-layout>
    <div class="container-message">
        <p class="p-message">Envie uma mensagem para a pessoa ou instituição que está cuidando do pet {{$pet->name}}:</p>
        <section class="section-message">
            <form action="{{route('mensagem.formMessage', $pet->id)}}" class="contact-form" method="POST">
                @csrf
                <div class="form-message">
                    <div class="box-message">
                        <label for="email" class="label-form-message">E-mail</label>
                        <input type="email"
                        autofocus  
                        id="email" 
                        name="email" 
                        class=" border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm"
                        placeholder="Digite aqui seu e-mail">
                    </div>
                    <div class="box-message">
                        <label for="mensagem" class="label-form-message">Mensagem</label>
                        <textarea type="text" name="message" id="message" autofocus placeholder="Escreva sua mensagem" class="text-area border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm"></textarea>
                    </div>
                </div>
                <div class="buttons-message">
                    <button class="button-enviar-msg" type="submit" style="background-color: rgb(252, 112, 113)">Enviar</button>
                </div>
            </form>
        </section>
    </div>
</x-app-layout>