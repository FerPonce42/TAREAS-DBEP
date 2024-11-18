using Xamarin.Forms;

namespace XamGenerateCV
{
    public partial class CvPage : ContentPage
    {
        public CvPage(string name, string position, string phone, string email, string country, string linkedin,
                      string languages, string skills, string profile, string experience, string education, string imagePath)
        {
            InitializeComponent();

            // Asignar los datos a las etiquetas
            nameLabel.Text = name;
            positionLabel.Text = position;
            phoneLabel.Text = $"📞 {phone}";
            emailLabel.Text = $"📧 {email}";
            countryLabel.Text = $"🇵🇪 {country}";
            linkedinLabel.Text = $"🔗 {linkedin}";
            languagesLabel.Text = $"• {languages.Replace(",", "\n• ")}";
            skillsLabel.Text = $"• {skills.Replace(",", "\n• ")}";
            profileLabel.Text = profile;
            experienceLabel.Text = experience;
            educationLabel.Text = education;

            // Asignarr la imagen del perfil si se proporcionó
            if (!string.IsNullOrEmpty(imagePath))
            {
                profileImage.Source = ImageSource.FromFile(imagePath);
            }
        }
    }
}
