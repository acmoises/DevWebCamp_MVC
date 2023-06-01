<main class="auth">

    <h2 class="auth__heading"><?php echo $titulo; ?></h2>
    <p class="auth__texto">Iniciar sesión en DevWebcamp</p>

    <form action="" class="formulario">
        <div class="formulario__campo">
            <label for="email" class="formulario__label">Email</label>
            <input 
                type="email"
                class="formulario__input"
                placeholder="Tu Email"
                id="email"
                name="email"
            >
        </div>
        <div class="formulario__campo">
            <label for="password" class="formulario__label">Password</label>
            <input 
                type="password"
                class="formulario__input"
                placeholder="Tu Password"
                id="password"
                name="password"
            >
        </div>

        <input type="submit" class="formulario__submit" value="Iniciar Sesión">
    </form>

    <dev class="acciones">
        <a href="/registro" class="acciones_enlace">¿Aún no tienes una cuenta? Obtener una</a>
        <a href="/olvide" class="acciones_enlace">¿Olvidaste tu password?</a>
    </dev>

</main>