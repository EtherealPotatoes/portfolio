import { Mail, Linkedin, Github, MapPin, Send } from 'lucide-react';
import { useState } from 'react';
import { createClient } from '@supabase/supabase-js';

const supabase = createClient(
  import.meta.env.VITE_SUPABASE_URL,
  import.meta.env.VITE_SUPABASE_ANON_KEY
);

export default function Contact() {
  const [formData, setFormData] = useState({
    name: '',
    email: '',
    subject: '',
    message: ''
  });
  const [isSubmitting, setIsSubmitting] = useState(false);
  const [submitMessage, setSubmitMessage] = useState('');

  const handleSubmit = async (e: React.FormEvent) => {
    e.preventDefault();
    setIsSubmitting(true);
    setSubmitMessage('');

    try {
      const { error } = await supabase
        .from('contact_messages')
        .insert([
          {
            name: formData.name,
            email: formData.email,
            subject: formData.subject,
            message: formData.message
          }
        ]);

      if (error) throw error;

      setFormData({ name: '', email: '', subject: '', message: '' });
      setSubmitMessage('Message sent successfully! I will get back to you soon.');

      setTimeout(() => setSubmitMessage(''), 5000);
    } catch (error) {
      setSubmitMessage('Error sending message. Please try again.');
    } finally {
      setIsSubmitting(false);
    }
  };

  const handleChange = (e: React.ChangeEvent<HTMLInputElement | HTMLTextAreaElement>) => {
    setFormData({
      ...formData,
      [e.target.name]: e.target.value
    });
  };

  return (
    <section id="contact" className="py-20 bg-gray-50">
      <div className="max-w-7xl mx-auto px-6">
        <div className="text-center mb-16">
          <h2 className="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
            Get In Touch
          </h2>
          <p className="text-xl text-gray-600 max-w-2xl mx-auto">
            I'm always excited to connect with fellow engineers, mentors, and anyone interested in collaboration
          </p>
        </div>

        <div className="grid grid-cols-1 lg:grid-cols-2 gap-12">
          <div>
            <h3 className="text-2xl font-bold text-gray-900 mb-6">
              Let's Connect
            </h3>
            <p className="text-gray-700 mb-8 leading-relaxed">
              Whether you're a college admissions officer, a potential mentor, or someone
              interested in my work, I'd love to hear from you. Feel free to reach out
              through any of the channels below or use the contact form.
            </p>

            <div className="space-y-4">
              <a
                href="mailto:jy139500@gmail.com"
                className="flex items-center gap-4 p-4 bg-white rounded-lg border border-gray-200 hover:border-blue-600 hover:shadow-md transition-all group"
              >
                <div className="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center group-hover:bg-blue-600 transition-colors">
                  <Mail className="text-blue-600 group-hover:text-white" size={24} />
                </div>
                <div>
                  <h4 className="font-semibold text-gray-900">Email</h4>
                  <p className="text-gray-600 text-sm">jy139500@gmail.com</p>
                </div>
              </a>

              <a
                href="https://linkedin.com/in/joseph-y-6827a0383/"
                target="_blank"
                rel="noopener noreferrer"
                className="flex items-center gap-4 p-4 bg-white rounded-lg border border-gray-200 hover:border-blue-600 hover:shadow-md transition-all group"
              >
                <div className="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center group-hover:bg-blue-600 transition-colors">
                  <Linkedin className="text-blue-600 group-hover:text-white" size={24} />
                </div>
                <div>
                  <h4 className="font-semibold text-gray-900">LinkedIn</h4>
                  <p className="text-gray-600 text-sm">linkedin.com/in/joseph-y-6827a0383/</p>
                </div>
              </a>

              <a
                href="https://github.com/EtherealPotatoes"
                target="_blank"
                rel="noopener noreferrer"
                className="flex items-center gap-4 p-4 bg-white rounded-lg border border-gray-200 hover:border-blue-600 hover:shadow-md transition-all group"
              >
                <div className="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center group-hover:bg-blue-600 transition-colors">
                  <Github className="text-blue-600 group-hover:text-white" size={24} />
                </div>
                <div>
                  <h4 className="font-semibold text-gray-900">GitHub</h4>
                  <p className="text-gray-600 text-sm">github.com/EtherealPotatoes</p>
                </div>
              </a>

              <div className="flex items-center gap-4 p-4 bg-white rounded-lg border border-gray-200">
                <div className="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center">
                  <MapPin className="text-blue-600" size={24} />
                </div>
                <div>
                  <h4 className="font-semibold text-gray-900">Location</h4>
                  <p className="text-gray-600 text-sm">Temple City, California, USA</p>
                </div>
              </div>
            </div>
          </div>

          <div>
            <form onSubmit={handleSubmit} className="bg-white rounded-xl p-8 shadow-lg border border-gray-200">
              <h3 className="text-2xl font-bold text-gray-900 mb-6">
                Send a Message
              </h3>

              <div className="space-y-4">
                <div>
                  <label htmlFor="name" className="block text-sm font-semibold text-gray-700 mb-2">
                    Name
                  </label>
                  <input
                    type="text"
                    id="name"
                    name="name"
                    value={formData.name}
                    onChange={handleChange}
                    required
                    className="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-600 focus:border-transparent outline-none transition-all"
                    placeholder="Your name"
                  />
                </div>

                <div>
                  <label htmlFor="email" className="block text-sm font-semibold text-gray-700 mb-2">
                    Email
                  </label>
                  <input
                    type="email"
                    id="email"
                    name="email"
                    value={formData.email}
                    onChange={handleChange}
                    required
                    className="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-600 focus:border-transparent outline-none transition-all"
                    placeholder="your.email@example.com"
                  />
                </div>

                <div>
                  <label htmlFor="subject" className="block text-sm font-semibold text-gray-700 mb-2">
                    Subject
                  </label>
                  <input
                    type="text"
                    id="subject"
                    name="subject"
                    value={formData.subject}
                    onChange={handleChange}
                    required
                    className="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-600 focus:border-transparent outline-none transition-all"
                    placeholder="What's this about?"
                  />
                </div>

                <div>
                  <label htmlFor="message" className="block text-sm font-semibold text-gray-700 mb-2">
                    Message
                  </label>
                  <textarea
                    id="message"
                    name="message"
                    value={formData.message}
                    onChange={handleChange}
                    required
                    rows={5}
                    className="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-600 focus:border-transparent outline-none transition-all resize-none"
                    placeholder="Tell me about your message..."
                  />
                </div>

                <button
                  type="submit"
                  disabled={isSubmitting}
                  className="w-full bg-blue-600 text-white py-3 rounded-lg hover:bg-blue-700 disabled:bg-gray-400 transition-colors font-semibold flex items-center justify-center gap-2 group"
                >
                  <span>{isSubmitting ? 'Sending...' : 'Send Message'}</span>
                  <Send size={18} className="group-hover:translate-x-1 transition-transform" />
                </button>

                {submitMessage && (
                  <div className={`p-3 rounded-lg text-center font-medium ${
                    submitMessage.includes('successfully')
                      ? 'bg-green-100 text-green-800'
                      : 'bg-red-100 text-red-800'
                  }`}>
                    {submitMessage}
                  </div>
                )}
              </div>
            </form>
          </div>
        </div>

        <div className="mt-16 text-center">
          <div className="inline-flex items-center gap-6 text-gray-600">
            <a
              href="https://github.com/EtherealPotatoes"
              target="_blank"
              rel="noopener noreferrer"
              className="hover:text-blue-600 transition-colors"
            >
              <Github size={24} />
            </a>
            <a
              href="https://linkedin.com/in/joseph-y-6827a0383/"
              target="_blank"
              rel="noopener noreferrer"
              className="hover:text-blue-600 transition-colors"
            >
              <Linkedin size={24} />
            </a>
            <a
              href="mailto:jy139500@gmail.com"
              className="hover:text-blue-600 transition-colors"
            >
              <Mail size={24} />
            </a>
          </div>
          <p className="mt-6 text-gray-600">
            © 2024 Joseph Young. Built with passion for engineering.
          </p>
        </div>
      </div>
    </section>
  );
}
