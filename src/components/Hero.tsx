import { Github, Linkedin, Mail, ChevronDown } from 'lucide-react';

export default function Hero() {
  const scrollToProjects = () => {
    const element = document.getElementById('projects');
    if (element) {
      element.scrollIntoView({ behavior: 'smooth' });
    }
  };

  return (
    <section id="hero" className="relative min-h-screen flex items-center justify-center bg-gradient-to-br from-blue-50 to-white pt-20">
      <div className="max-w-7xl mx-auto px-6 py-20 text-center">
        <div className="space-y-6">
          <h1 className="text-5xl md:text-7xl font-bold text-gray-900 leading-tight">
            Hi, I'm <span className="text-blue-600">Joseph Young</span>
          </h1>
          <p className="text-xl md:text-2xl text-gray-600 max-w-2xl mx-auto">
            High School Engineering Student | Innovator | Problem Solver
          </p>
          <p className="text-lg text-gray-500 max-w-3xl mx-auto leading-relaxed">
            Passionate about creating innovative solutions through engineering, robotics, and technology.
            Dedicated to making a positive impact through hands-on projects and continuous learning.
          </p>

          <div className="flex items-center justify-center gap-4 pt-6">
            <a
              href="https://github.com/EtherealPotatoes"
              target="_blank"
              rel="noopener noreferrer"
              className="p-3 bg-gray-900 text-white rounded-full hover:bg-gray-700 transition-colors"
            >
              <Github size={24} />
            </a>
            <a
              href="https://linkedin.com/in/joseph-y-6827a0383/"
              target="_blank"
              rel="noopener noreferrer"
              className="p-3 bg-blue-600 text-white rounded-full hover:bg-blue-700 transition-colors"
            >
              <Linkedin size={24} />
            </a>
            <a
              href="mailto:jy139500@gmail.com"
              className="p-3 bg-gray-200 text-gray-900 rounded-full hover:bg-gray-300 transition-colors"
            >
              <Mail size={24} />
            </a>
          </div>

          <div className="pt-8">
            <button
              onClick={scrollToProjects}
              className="bg-blue-600 text-white px-8 py-3 rounded-lg hover:bg-blue-700 transition-all transform hover:scale-105 font-medium text-lg"
            >
              View My Work
            </button>
          </div>
        </div>

        <div className="fixed bottom-8 left-1/2 transform -translate-x-1/2">
          <button
            onClick={scrollToProjects}
            className="animate-bounce text-gray-400 hover:text-blue-600 transition-colors"
          >
            <ChevronDown size={32} />
          </button>
        </div>
      </div>
    </section>
  );
}
