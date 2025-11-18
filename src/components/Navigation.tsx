import { Menu, X } from 'lucide-react';
import { useState } from 'react';

export default function Navigation() {
  const [isOpen, setIsOpen] = useState(false);

  const scrollToSection = (id: string) => {
    const element = document.getElementById(id);
    if (element) {
      element.scrollIntoView({ behavior: 'smooth' });
      setIsOpen(false);
    }
  };

  return (
    <nav className="fixed top-0 left-0 right-0 bg-white/90 backdrop-blur-sm z-50 border-b border-gray-200">
      <div className="max-w-7xl mx-auto px-6 py-4">
        <div className="flex items-center justify-between">
          <button
            onClick={() => scrollToSection('hero')}
            className="text-2xl font-bold text-gray-900 hover:text-blue-600 transition-colors"
          >
            Portfolio
          </button>

          <div className="hidden md:flex items-center gap-8">
            <button
              onClick={() => scrollToSection('projects')}
              className="text-gray-700 hover:text-blue-600 transition-colors font-medium"
            >
              Projects
            </button>
            <button
              onClick={() => scrollToSection('skills')}
              className="text-gray-700 hover:text-blue-600 transition-colors font-medium"
            >
              Skills
            </button>
            <button
              onClick={() => scrollToSection('about')}
              className="text-gray-700 hover:text-blue-600 transition-colors font-medium"
            >
              About
            </button>
            <button
              onClick={() => scrollToSection('contact')}
              className="bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700 transition-colors font-medium"
            >
              Contact
            </button>
          </div>

          <button
            onClick={() => setIsOpen(!isOpen)}
            className="md:hidden text-gray-900"
          >
            {isOpen ? <X size={24} /> : <Menu size={24} />}
          </button>
        </div>

        {isOpen && (
          <div className="md:hidden mt-4 pb-4 flex flex-col gap-4">
            <button
              onClick={() => scrollToSection('projects')}
              className="text-left text-gray-700 hover:text-blue-600 transition-colors font-medium"
            >
              Projects
            </button>
            <button
              onClick={() => scrollToSection('skills')}
              className="text-left text-gray-700 hover:text-blue-600 transition-colors font-medium"
            >
              Skills
            </button>
            <button
              onClick={() => scrollToSection('about')}
              className="text-left text-gray-700 hover:text-blue-600 transition-colors font-medium"
            >
              About
            </button>
            <button
              onClick={() => scrollToSection('contact')}
              className="bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700 transition-colors font-medium text-center"
            >
              Contact
            </button>
          </div>
        )}
      </div>
    </nav>
  );
}
