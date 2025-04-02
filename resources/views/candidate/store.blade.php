<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Postularse</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="container mt-5">
        <div class="card shadow p-4">
            <div class="text-center">
                <img style="width: 350px" class="logo" src="{{ asset('build/assets/img/logo.webp') }}" alt="Logo taller Sieten Motor">
                <h2 class="mb-4">Postularse</h2>
            </div>
            <form>
                <div class="row g-3">
                    <div class="col-md-6">
                        <label class="form-label">Nombres</label>
                        <input type="text" class="form-control" required>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Apellidos</label>
                        <input type="text" class="form-control" required>
                    </div>
                    <div class="col-md-4">
                        <label class="form-label">Fecha de Nacimiento</label>
                        <input type="date" class="form-control" required>
                    </div>
                    <div class="col-md-4">
                        <label class="form-label">Sexo</label>
                        <select class="form-select" required>
                            <option value="">Seleccione</option>
                            <option>Masculino</option>
                            <option>Femenino</option>
                            <option>Otro</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label class="form-label">Correo</label>
                        <input type="email" class="form-control" required>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Teléfono</label>
                        <input type="tel" class="form-control" required>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Provincia</label>
                        <input type="text" class="form-control" required>
                    </div>
                    <div class="col-md-12">
                        <label class="form-label">Ciudad</label>
                        <input type="text" class="form-control" required>
                    </div>
                    
                    <div class="col-md-12">
                        <label class="form-label">Disponibilidad Horaria</label>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="Jornada Completa">
                            <label class="form-check-label">Jornada Completa</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="Media Jornada">
                            <label class="form-check-label">Media Jornada</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="Fines de Semana">
                            <label class="form-check-label">Fines de Semana</label>
                        </div>
                    </div>
                    
                    <div class="col-md-12">
                        <label class="form-label">Tiendas donde quiere trabajar</label>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="Novelda">
                            <label class="form-check-label">Novelda</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="Castalla">
                            <label class="form-check-label">Castalla</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="Dolores">
                            <label class="form-check-label">Dolores</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="San Blas">
                            <label class="form-check-label">San Blas</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="Formana CC">
                            <label class="form-check-label">Formana CC</label>
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                        <label class="form-label">Adjuntar CV</label>
                        <input type="file" class="form-control" required>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Adjuntar Foto (Opcional)</label>
                        <input type="file" class="form-control">
                    </div>
                    <div class="col-md-12">
                        <label class="form-label">Mensaje</label>
                        <textarea class="form-control" rows="3"></textarea>
                    </div>
                    
                    <div class="col-md-12 text-center mt-3">
                        <button type="submit" class="btn btn-primary">Enviar Postulación</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
