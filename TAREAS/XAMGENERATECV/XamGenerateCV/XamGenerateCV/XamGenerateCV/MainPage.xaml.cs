using Xamarin.Essentials;
using Xamarin.Forms;
using System;
using System.IO;

namespace XamGenerateCV
{
    public partial class MainPage : ContentPage
    {
        // Variable para almacenar la ruta de la imagen seleccionada
        private string selectedImagePath;

        public MainPage()
        {
            InitializeComponent();
        }

        // Método para seleccionar la imagen de perfil
        private async void OnSelectImageButtonClicked(object sender, EventArgs e)
        {
            try
            {
                // Abre la galería de imágenes
                var result = await MediaPicker.PickPhotoAsync(new MediaPickerOptions
                {
                    Title = "Selecciona una foto"
                });

                if (result != null)
                {
                    // Obtiene el stream de la imagen seleccionada
                    var stream = await result.OpenReadAsync();

                    // Convierte la imagen a una fuente que pueda usar el control Image
                    selectedImagePath = result.FullPath;
                    imageProfile.Source = ImageSource.FromStream(() => stream); // Asigna la imagen al Image control
                }
            }
            catch (FeatureNotSupportedException fnsEx)
            {
                await DisplayAlert("Error", "La galería no está soportada en este dispositivo.", "OK");
            }
            catch (PermissionException pEx)
            {
                await DisplayAlert("Error", "No tienes permisos para acceder a la galería.", "OK");
            }
            catch (Exception ex)
            {
                await DisplayAlert("Error", "Hubo un problema al seleccionar la foto.", "OK");
            }
        }

        // Método para generar el CV
        private async void OnCvPageButtonClicked(object sender, EventArgs e)
        {
            // Recolectar los datos de los campos
            var name = nameEntry.Text;
            var position = positionEntry.Text;
            var phone = phoneEntry.Text;
            var email = emailEntry.Text;
            var country = countryEntry.Text;
            var linkedin = linkedinEntry.Text;
            var languages = languageEntry.Text;
            var skills = skillsEntry.Text;
            var profile = profileEntry.Text;
            var experience = experienceEntry.Text;
            var education = educationEntry.Text;

            // ruta de la imagen seleccionada, o un valor predeterminado si no se seleccionó ninguna
            var imagePath = selectedImagePath ?? "placeholder.jpg"; // predeterminado

            // Instancia de CvPage y le pasamos los datos
            var cvPage = new CvPage(name, position, phone, email, country, linkedin, languages, skills, profile, experience, education, imagePath);
            await Navigation.PushAsync(cvPage); // Navegar a la página del CV
        }
    }
}
