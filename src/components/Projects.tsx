import { ExternalLink, Github, Award } from 'lucide-react';

interface Project {
  title: string;
  description: string;
  technologies: string[];
  achievements: string[];
  image: string;
  githubUrl?: string;
  liveUrl?: string;
  category: string;
}

export default function Projects() {
  const projects: Project[] = [
    {
      title: "Bike Frame and Suspension",
      description: "Designed a custom bike frame and suspension system optimized for stability and off-road shock absorption.",
      technologies: ["CAD", "SolidWorks Simulation", "3D Printing", "Reverse Engineer"],
      achievements: [
        "Working suspension with bike shock",
        "Refined geometry through iterative CAD testing"
      ],
      image: "/images/bike-frame.jpg",
      liveUrl: "https://docs.google.com/presentation/d/1o8r13nHphH8j1RqkgcLpbXoBK4lAk47uzTXsi-RMYU4/edit?usp=sharing",
      category: "Mobility Engineering"
    },
    {
      title: "Mechanical Watch Design",
      description: "Created a full skeleton watch concept aimed at maximizing appraisal value through aesthetics and mechanical efficiency.",
      technologies: ["SolidWorks", "Gear Train", "Rendering Tools", "SolidWorks Visualize"],
      achievements: [
        "Detailed movement architecture",
        "Slick modern design"
      ],
      image: "/images/watch-design.jpg",
      liveUrl: "https://docs.google.com/presentation/d/158Z8fMB94L4N5pZnxoO_ooYKExUQ1tmA6Q3ufnh_fao/edit?usp=sharing",
      category: "Product Design"
    },
    {
      title: "Jet Turbine Engine Prototype",
      description: "Reverse engineered a jet turbine engine from blueprints found online to study mechanical movement.",
      technologies: ["CAD", "SolidWorks", "Basic Aerodynamics Modeling"],
      achievements: [
        "Learned complex modeling",
        "Intro to aerospace engineering"
      ],
      image: "/images/jet-engine.jpg",
      category: "Aerospace"
    },
    {
      title: "Blackjack Game and AI Program",
      description: "Developed a full blackjack game with an AI that reads game state and suggests optimal moves to be presented to other students.",
      technologies: ["Python", "Pygame", "JSON State Parsing", "Standard Blackjack Strategy Logic"],
      achievements: [
        "Implemented insurance, surrender, and advanced payout logic",
        "Functioning decision-making AI"
      ],
      image: "/images/blackjack-game.jpg",
      liveUrl: "https://docs.google.com/presentation/d/1682_FynZ_fbw8-GJn4Z4fvALHq-h5TsS6_UXC2bungc/edit?usp=sharing",
      category: "Game Development"
    }
  ];

  return (
    <section id="projects" className="py-20 bg-white">
      <div className="max-w-7xl mx-auto px-6">
        <div className="text-center mb-16">
          <h2 className="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
            Featured Projects
          </h2>
          <p className="text-xl text-gray-600 max-w-2xl mx-auto">
            A showcase of my engineering projects, competitions, and research
          </p>
        </div>

        <div className="grid grid-cols-1 md:grid-cols-2 gap-8">
          {projects.map((project, index) => (
            <div
              key={index}
              className="bg-white rounded-xl shadow-lg overflow-hidden border border-gray-200 hover:shadow-xl transition-shadow duration-300"
            >
              <div className="relative h-48 overflow-hidden bg-gray-100">
                <img
                  src={project.image}
                  alt={project.title}
                  className="w-full h-full object-cover hover:scale-105 transition-transform duration-300"
                />
                <div className="absolute top-4 right-4 bg-blue-600 text-white px-3 py-1 rounded-full text-sm font-medium">
                  {project.category}
                </div>
              </div>

              <div className="p-6">
                <h3 className="text-2xl font-bold text-gray-900 mb-3">
                  {project.title}
                </h3>
                <p className="text-gray-600 mb-4 leading-relaxed">
                  {project.description}
                </p>

                <div className="mb-4">
                  <h4 className="text-sm font-semibold text-gray-700 mb-2 flex items-center gap-2">
                    <Award size={16} className="text-blue-600" />
                    Key Achievements
                  </h4>
                  <ul className="space-y-1">
                    {project.achievements.map((achievement, i) => (
                      <li key={i} className="text-sm text-gray-600 pl-4">
                        • {achievement}
                      </li>
                    ))}
                  </ul>
                </div>

                <div className="mb-4">
                  <div className="flex flex-wrap gap-2">
                    {project.technologies.map((tech, i) => (
                      <span
                        key={i}
                        className="px-3 py-1 bg-blue-50 text-blue-700 rounded-full text-sm font-medium"
                      >
                        {tech}
                      </span>
                    ))}
                  </div>
                </div>

                <div className="flex gap-3 pt-4 border-t border-gray-200">
                  {project.githubUrl && (
                    <a
                      href={project.githubUrl}
                      target="_blank"
                      rel="noopener noreferrer"
                      className="flex items-center gap-2 text-gray-700 hover:text-blue-600 transition-colors font-medium"
                    >
                      <Github size={18} />
                      Code
                    </a>
                  )}
                  {project.liveUrl && (
                    <a
                      href={project.liveUrl}
                      target="_blank"
                      rel="noopener noreferrer"
                      className="flex items-center gap-2 text-gray-700 hover:text-blue-600 transition-colors font-medium"
                    >
                      <ExternalLink size={18} />
                      Presentation
                    </a>
                  )}
                </div>
              </div>
            </div>
          ))}
        </div>
      </div>
    </section>
  );
}
