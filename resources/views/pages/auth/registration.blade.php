<x-layout >
    <x-slot:title>
        readme: регистрация
    </x-slot:title>

    <main class="page__main page__main--registration">
        <div class="container">
            <h1 class="page__title page__title--registration">Регистрация</h1>
        </div>
        <section class="registration container">
            <h2 class="visually-hidden">Форма регистрации</h2>
            <form class="registration__form form"
                  action="/registration"
                  method="POST"
                  enctype="multipart/form-data">
                @csrf

                <div class="form__text-inputs-wrapper">
                    <div class="form__text-inputs">
                        <div class="registration__input-wrapper form__input-wrapper">
                            <label class="registration__label form__label" for="registration-email">
                                Электронная почта <span class="form__input-required">*</span>
                            </label>
                            <div class="form__input-section @error('email'){{' form__input-section--error'}}@enderror">
                                <input class="registration__input form__input"
                                       id="registration-email"
                                       type="email"
                                       name="email"
                                       placeholder="Укажите эл.почту"
                                       value="{{old('email')}}">
                                @error('email')
                                    <button class="form__error-button button" type="button">
                                        !<span class="visually-hidden">Информация об ошибке</span>
                                    </button>
                                    <div class="form__error-text">
                                        <h3 class="form__error-title">Электронная почта</h3>
                                        <p class="form__error-desc">{{$message}}</p>
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="registration__input-wrapper form__input-wrapper">
                            <label class="registration__label form__label" for="registration-login">
                                Логин <span class="form__input-required">*</span>
                            </label>
                            <div class="form__input-section @error('login'){{' form__input-section--error'}}@enderror">
                                <input class="registration__input form__input"
                                       id="registration-login"
                                       type="text"
                                       name="login"
                                       placeholder="Укажите логин"
                                       value="{{old('login')}}">
                                @error('login')
                                    <button class="form__error-button button" type="button">
                                        !<span class="visually-hidden">Информация об ошибке</span>
                                    </button>
                                    <div class="form__error-text">
                                        <h3 class="form__error-title">Логин</h3>
                                        <p class="form__error-desc">{{$message}}</p>
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="registration__input-wrapper form__input-wrapper">
                            <label class="registration__label form__label" for="registration-password">
                                Пароль<span class="form__input-required">*</span>
                            </label>
                            <div class="form__input-section @error('password'){{' form__input-section--error'}}@enderror">
                                <input class="registration__input form__input"
                                       id="registration-password"
                                       type="password"
                                       name="password"
                                       placeholder="Придумайте пароль">
                                @error('password')
                                    <button class="form__error-button button" type="button">
                                        !<span class="visually-hidden">Информация об ошибке</span>
                                    </button>
                                    <div class="form__error-text">
                                        <h3 class="form__error-title">Пароль</h3>
                                        <p class="form__error-desc">{{$message}}</p>
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="registration__input-wrapper form__input-wrapper">
                            <label class="registration__label form__label" for="registration-password-repeat">
                                Повтор пароля<span class="form__input-required">*</span>
                            </label>
                            <div class="form__input-section @error('password'){{' form__input-section--error'}}@enderror">
                                <input class="registration__input form__input"
                                       id="registration-password-repeat"
                                       type="password"
                                       name="password_confirmation"
                                       placeholder="Повторите пароль">
                                @error('password-confirmation')
                                    <button class="form__error-button button" type="button">
                                        !<span class="visually-hidden">Информация об ошибке</span>
                                    </button>
                                    <div class="form__error-text">
                                        <h3 class="form__error-title">Повтор пароля</h3>
                                        <p class="form__error-desc">{{$message}}</p>
                                    </div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    @if($errors->any())
                        <div class="form__invalid-block">
                            <b class="form__invalid-slogan">Пожалуйста, исправьте следующие ошибки:</b>
                            <ul class="form__invalid-list">
                                @foreach($errors->all() as $error)
                                    <li class="form__invalid-item">{{$error}}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                </div>

                <div class="registration__input-file-container form__input-container form__input-container--file">
                    <div class="registration__input-file-wrapper form__input-file-wrapper">
                        <div class="registration__file-zone form__file-zone dropzone">
                            <input class="registration__input-file form__input-file"
                                   id="avatar"
                                   type="file"
                                   name="avatar"
                                   title="">
                            <div class="form__file-zone-text">
                                <span>Перетащите фото сюда</span>
                            </div>
                        </div>
                        <button class="registration__input-file-button form__input-file-button button" type="button">
                            <span>Выбрать фото</span>
                            <svg class="registration__attach-icon form__attach-icon" width="10" height="20">
                                <use xlink:href="#icon-attach"></use>
                            </svg>
                        </button>
                    </div>
                    <div class="registration__file form__file dropzone-previews">
                    </div>

                </div>
                <button class="registration__submit button button--main" type="submit">Отправить</button>
            </form>
        </section>
    </main>
</x-layout>
